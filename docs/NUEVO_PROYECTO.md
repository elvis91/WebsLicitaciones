# Guía: Implementar un nuevo contrato

Pasos reproducibles para publicar un sitio de transparencia para un contrato nuevo.

## 0. Prerrequisitos

- Acceso SSH Hostinger con llave ed25519 (`~/.ssh/id_ed25519`)
- Acceso Cloudflare (API token o panel) a la zona `licitacionesgt.com` o `tecnosis.org`
- PDF del contrato + fotos organizadas por fecha
- NOG del proceso en GUATECOMPRAS

## 1. Extraer datos del contrato

Del PDF del contrato obtener:

| Campo | Ejemplo |
|---|---|
| `$nog` | `23392517` |
| `$contrato` | `02-2024 L` |
| `$descripcion` | `CONSTRUCCION SISTEMA DE AGUA POTABLE...` |
| `$contratista` | Nombre completo persona |
| `$empresa` | Razón social |
| `$monto` | `Q. 1,800,000.00` |
| `$plazo` | `5 MESES CALENDARIO` |
| `$fecha_firma`, `$fecha_inicio`, `$fecha_fin` | ISO `YYYY-MM-DD` |
| `$entidad`, `$municipio`, `$departamento`, `$alcalde` | |
| `$lat`, `$lng` | Coordenadas de la obra |
| `$renglones` | Array de la tabla de renglones |

**PDFs escaneados**: usar `pdfplumber` para renderizar páginas como PNG y leerlas visualmente:

```python
import pdfplumber
with pdfplumber.open("contrato.pdf") as pdf:
    for i, page in enumerate(pdf.pages):
        page.to_image(resolution=150).save(f"p{i+1}.png")
```

## 2. Preparar fotos

Las fotos deben ir en `imagenes/YYYY-MM-DD/`. Si están en carpetas con otro formato:

```bash
python scripts/rename_folders.py "ruta/local/al/proyecto"
```

## 3. Editar el template

```bash
cp template/default.php proyectos/<nog>/default.php
# Editar bloque $nog, $contrato, $renglones, etc.
```

## 4. Crear el subdominio en Hostinger

Panel → Websites → **Add website** (dropdown) → **Empty website** → dominio `nog<NOG>.licitacionesgt.com` (o `.tecnosis.org`) → **Use it**.

Esto crea `/home/u925954286/domains/<subdominio>/public_html/`.

## 5. Desplegar

```bash
bash scripts/deploy_new_site.sh <subdominio> <ruta_proyecto_local>
```

Sube `default.php` y todas las carpetas `imagenes/YYYY-MM-DD/`.

## 6. DNS en Cloudflare

1. Crear/editar registro **A** → `nog<NOG>` → `88.223.84.32` → **Proxy: DNS only** (nube gris).
2. Esperar ~2 minutos: Hostinger emite SSL Let's Encrypt automáticamente.
3. Verificar: `curl -sI https://nog<NOG>.<dominio> | head -1` → `200 OK`.
4. Activar **Proxy: Proxied** (nube naranja).
5. SSL/TLS mode de la zona debe estar en **Full (strict)**.

## 7. Verificación final

```bash
curl -s -o /dev/null -w "%{http_code}\n" https://nog<NOG>.<dominio>/
```

- Debe devolver `200`
- Verificar mapa Leaflet, tabla de renglones, galería de fotos
- Registrar en Notion (página master) con fecha y URL

## Errores comunes

| Síntoma | Causa | Fix |
|---|---|---|
| 521 / 522 | Proxy ON antes que SSL | Apagar proxy, esperar SSL, encender |
| Galería vacía | Extensiones `.jpeg` vs `.jpg` | El template acepta ambas; verificar con `ls` en el servidor |
| Monto x100 | Número sin decimales al renderizar | Asegurar formato `Q. X,XXX.XX` literal |
| Contador fotos = 0 | Carpeta vacía o nombre no ISO | Renombrar a `YYYY-MM-DD` |
