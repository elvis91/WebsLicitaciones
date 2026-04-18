#!/usr/bin/env bash
# Sube fotos a un sitio existente en Hostinger.
#
# Uso 1 — carpeta con fecha en el nombre:
#   bash upload_photos.sh <NOG> <carpeta_local>
#   Ej: bash upload_photos.sh 25929097 "./Reporte 2026-04-17"
#   Fecha detectada automáticamente del nombre de la carpeta (YYYY-MM-DD).
#
# Uso 2 — fecha explícita:
#   bash upload_photos.sh <NOG> <carpeta_local> <YYYY-MM-DD>
#   Ej: bash upload_photos.sh 25929097 ./fotos 2026-04-17
#
# Auto-detecta: .jpg .jpeg .png (case-insensitive).
# Crea la carpeta remota si no existe. Idempotente (scp sobrescribe).
set -euo pipefail

NOG="${1:?NOG requerido (ej: 25929097)}"
SRC="${2:?carpeta local requerida}"
FECHA="${3:-}"

# Detectar fecha del nombre de carpeta si no se dio
if [[ -z "$FECHA" ]]; then
  FECHA=$(basename "$SRC" | grep -oE '[0-9]{4}-[0-9]{2}-[0-9]{2}' | head -1 || true)
  if [[ -z "$FECHA" ]]; then
    echo "ERROR: no pude detectar fecha en '$SRC'. Pasala como 3er argumento." >&2
    exit 1
  fi
fi

DOMINIO="nog${NOG}.licitacionesgt.com"
REMOTE="/home/u925954286/domains/${DOMINIO}/public_html/imagenes/${FECHA}"
SSH="ssh -p 65002 -i $HOME/.ssh/id_ed25519 -o BatchMode=yes u925954286@88.223.84.32"
SCP="scp -P 65002 -i $HOME/.ssh/id_ed25519"

# Contar fotos locales
shopt -s nullglob nocaseglob
FILES=("$SRC"/*.jpg "$SRC"/*.jpeg "$SRC"/*.png)
shopt -u nocaseglob
N=${#FILES[@]}
[[ $N -gt 0 ]] || { echo "ERROR: no hay fotos .jpg/.jpeg/.png en $SRC"; exit 1; }

echo "==> Sitio   : https://${DOMINIO}"
echo "==> Fecha   : ${FECHA}"
echo "==> Fotos   : ${N}"
echo "==> Destino : ${REMOTE}"

# Validar que el sitio existe
$SSH "[ -d /home/u925954286/domains/${DOMINIO}/public_html ] || { echo 'ERR: sitio no existe'; exit 1; }"

# Crear carpeta remota
$SSH "mkdir -p '${REMOTE}'"

# Subir todas las fotos en una sola invocación de scp
$SCP "${FILES[@]}" "u925954286@88.223.84.32:${REMOTE}/"

# Verificar
REMOTE_COUNT=$($SSH "ls '${REMOTE}' | wc -l")
echo "==> Subidas confirmadas en remoto: ${REMOTE_COUNT}"
echo "==> OK: https://${DOMINIO}/"
