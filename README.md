# WebsLicitaciones — Sitios de Transparencia Tecnosis

Sistema de sitios web de transparencia para obra pública en Guatemala. Publica avance físico de contratos conforme al **Art. 89 del Decreto 36-2024**, enlazados desde GUATECOMPRAS.

- **Sitios en producción:** 36+ bajo `nogXXXXXXXX.licitacionesgt.com` y `nogXXXXXXXX.tecnosis.org`
- **Stack:** PHP (sin framework) + Leaflet.js + HLS.js
- **Hosting:** Hostinger Business (shared) — SSH `88.223.84.32:65002`, usuario `u925954286`
- **DNS/CDN:** Cloudflare (proxy ON, Full strict SSL)
- **Notion master:** [🏗️ Tecnosis — Sitios Web de Transparencia](https://www.notion.so/342a31f82a7c81098503fb4d6b034652)

## Estructura del repo

```
template/default.php       Template canónico (copiar y editar variables)
docs/NUEVO_PROYECTO.md     Guía paso a paso para un nuevo contrato
scripts/                   Helpers (rename fotos, deploy SCP)
proyectos/                 Copias versionadas de proyectos desplegados
fix_*.php                  Scripts one-shot ya ejecutados (histórico)
```

## Implementar un contrato nuevo

Ver [`docs/NUEVO_PROYECTO.md`](docs/NUEVO_PROYECTO.md). Resumen:

1. Crear subdominio en Hostinger (onboarding → quick-install empty).
2. Copiar `template/default.php`, editar bloque de configuración (NOG, contrato, renglones, coordenadas).
3. `scp` del `default.php` + carpeta `imagenes/YYYY-MM-DD/`.
4. Apuntar DNS a Hostinger en Cloudflare (proxy OFF).
5. Esperar SSL Let's Encrypt (~2 min) → proxy ON Full(strict).

## Scripts

- `scripts/rename_folders.py` — renombra carpetas `DD-MM-YYYY` → `YYYY-MM-DD`
- `scripts/deploy_new_site.sh` — sube `default.php` + fotos a Hostinger

## Infraestructura

| Recurso | Valor |
|---|---|
| SSH Hostinger | `ssh -p 65002 u925954286@88.223.84.32` |
| Path dominios | `/home/u925954286/domains/<subdominio>/public_html/` |
| Cloudflare zones | `tecnosis.org`, `licitacionesgt.com` |
| Registro A | `88.223.84.32` |

## Licencia

Propietario. Uso interno Tecnosis.
