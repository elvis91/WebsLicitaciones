#!/usr/bin/env bash
# Sincroniza fotos de múltiples proyectos a Hostinger.
#
# Estructura esperada:
#   <root>/
#     <cualquier nombre que termine en NOG>/     ej: "22 AMPLIACION ... 25929097"
#       YYYY-MM-DD/                              ej: "2026-04-17"
#         *.jpg / *.jpeg / *.png
#
# Uso: bash sync_photos_batch.sh <root>
# Sube SOLO carpetas de fecha que NO existan en el remoto (o que tengan menos fotos que el local).
set -euo pipefail

ROOT="${1:?carpeta raíz requerida}"
SSH="ssh -p 65002 -i $HOME/.ssh/id_ed25519 -o BatchMode=yes u925954286@88.223.84.32"
SCP="scp -P 65002 -i $HOME/.ssh/id_ed25519"

[[ -d "$ROOT" ]] || { echo "No existe $ROOT"; exit 1; }

for proyecto in "$ROOT"/*/; do
  name=$(basename "$proyecto")
  nog=$(echo "$name" | grep -oE '[0-9]{8}' | tail -1 || true)
  [[ -z "$nog" ]] && { echo "SKIP (sin NOG): $name"; continue; }

  dominio="nog${nog}.licitacionesgt.com"

  if ! $SSH "[ -d /home/u925954286/domains/${dominio}/public_html ]" 2>/dev/null; then
    echo "SKIP (sitio no existe): ${dominio}"
    continue
  fi

  echo "=== Proyecto NOG ${nog} → ${dominio}"

  for fecha_dir in "$proyecto"*/; do
    fecha=$(basename "$fecha_dir" | grep -oE '^[0-9]{4}-[0-9]{2}-[0-9]{2}$' || true)
    [[ -z "$fecha" ]] && continue

    shopt -s nullglob nocaseglob
    files=("$fecha_dir"*.jpg "$fecha_dir"*.jpeg "$fecha_dir"*.png)
    shopt -u nocaseglob
    n_local=${#files[@]}
    [[ $n_local -eq 0 ]] && continue

    remote="/home/u925954286/domains/${dominio}/public_html/imagenes/${fecha}"
    n_remote=$($SSH "ls '$remote' 2>/dev/null | wc -l" || echo 0)

    if [[ $n_local -le $n_remote ]]; then
      echo "  ${fecha}: ${n_local} local ≤ ${n_remote} remoto → skip"
      continue
    fi

    echo "  ${fecha}: subiendo ${n_local} fotos (remoto tenía ${n_remote})"
    $SSH "mkdir -p '$remote'"
    $SCP "${files[@]}" "u925954286@88.223.84.32:${remote}/"
  done
done

echo "=== Sync completado"
