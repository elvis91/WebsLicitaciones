#!/usr/bin/env bash
# Despliega default.php + imagenes/ a Hostinger.
# Uso: bash deploy_new_site.sh <subdominio> <ruta_local_proyecto>
# Ejemplo: bash deploy_new_site.sh nog23392517.tecnosis.org "./proyectos/23392517"
set -euo pipefail

SUB="${1:?subdominio requerido}"
SRC="${2:?ruta local requerida}"

SSH_OPTS="-p 65002 -i $HOME/.ssh/id_ed25519 -o BatchMode=yes"
USER="u925954286@88.223.84.32"
REMOTE="/home/u925954286/domains/${SUB}/public_html"

[[ -f "${SRC}/default.php" ]] || { echo "No existe ${SRC}/default.php"; exit 1; }

echo "==> Subiendo default.php"
scp -P 65002 -i "$HOME/.ssh/id_ed25519" "${SRC}/default.php" "${USER}:${REMOTE}/default.php"

if [[ -d "${SRC}/imagenes" ]]; then
  echo "==> Creando carpetas remotas"
  DIRS=$(cd "${SRC}/imagenes" && ls -d */ 2>/dev/null | tr -d '/' | tr '\n' ' ' || true)
  if [[ -n "${DIRS}" ]]; then
    ssh ${SSH_OPTS} "${USER}" "mkdir -p ${REMOTE}/imagenes && cd ${REMOTE}/imagenes && mkdir -p ${DIRS}"
    echo "==> Subiendo fotos"
    for d in ${DIRS}; do
      echo "   - ${d}"
      scp -P 65002 -i "$HOME/.ssh/id_ed25519" "${SRC}/imagenes/${d}/"*.{jpg,jpeg,JPG,JPEG,png,PNG} \
        "${USER}:${REMOTE}/imagenes/${d}/" 2>/dev/null || true
    done
  fi
fi

echo "==> Verificando"
ssh ${SSH_OPTS} "${USER}" "ls -la ${REMOTE}/ && echo --- && find ${REMOTE}/imagenes -type f 2>/dev/null | wc -l"
echo "OK. Ahora apuntar DNS en Cloudflare a 88.223.84.32 (proxy OFF hasta que SSL se emita)."
