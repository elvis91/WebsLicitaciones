# CLAUDE.md — Runbook para Claude Code

Instrucciones para que Claude Code ejecute **end-to-end** la publicación de un sitio de transparencia cuando el usuario entrega uno o más PDFs de contrato.

## Credenciales y acceso (pre-cargado)

```
SSH Hostinger:  ssh -p 65002 -i ~/.ssh/id_ed25519 u925954286@88.223.84.32
Host:           88.223.84.32
Puerto:         65002
Usuario:        u925954286
Llave privada:  C:\Users\elvis\.ssh\id_ed25519   (sin passphrase)
Ruta dominios:  /home/u925954286/domains/
Notion master:  342a31f82a7c81098503fb4d6b034652
GitHub repo:    elvis91/WebsLicitaciones
Dominio base:   licitacionesgt.com  (nameservers en Hostinger → SSL automático)
```

**Primera acción en cada sesión nueva**, sin pedir permiso: smoke test SSH.
```bash
ssh -p 65002 -i ~/.ssh/id_ed25519 -o BatchMode=yes -o ConnectTimeout=10 \
    u925954286@88.223.84.32 "ls /home/u925954286/domains/ | wc -l"
```
Si falla → detenerse y pedir que el usuario valide la llave. Si devuelve un número → continuar.

## Política de autonomía

- **No pedir confirmación** para: conexiones SSH de solo lectura, `mkdir`, `scp` de archivos nuevos, lectura de PDFs, lectura Notion, generar `default.php` local.
- **Sí pedir confirmación** solo para: sobrescribir un `default.php` ya existente en producción, borrar fotos remotas, cambios que afecten sitios en producción fuera del NOG actual.

## Disparador

El usuario sube/menciona uno o más **PDFs de contrato administrativo** (típicamente con formato `NNNNNNNN Contrato XX-AAAA ... .pdf`, donde `NNNNNNNN` es el NOG) y además puede indicar una carpeta con **fotos organizadas por fecha**.

Cuando esto ocurre, Claude Code debe ejecutar automáticamente los pasos de abajo. **Por cada contrato** del lote.

## Pasos obligatorios (por contrato)

### 1. Extraer datos del PDF
- Si el PDF es texto: usar `pdfplumber` / `pdftotext`.
- Si el PDF es escaneado: renderizar páginas con `pdfplumber` (`page.to_image(resolution=150).save(...)`) y leer las imágenes con el `Read` tool.
- Campos requeridos: `$nog`, `$contrato`, `$descripcion`, `$titulo_hero`, `$contratista`, `$empresa`, `$monto`, `$plazo`, `$fecha_firma`, `$fecha_inicio`, `$fecha_fin`, `$estatus`, `$entidad`, `$municipio`, `$departamento`, `$alcalde`, `$ubicacion`, `$lat`, `$lng`, `$renglones` (array completo, literal).
- Reglas: fecha firma = fecha inicio. Anticipo = 20% salvo indicación. Renglones **copiados literalmente**, sin abreviar.

### 2. Generar `default.php`
```bash
mkdir -p proyectos/<nog>
cp template/default.php proyectos/<nog>/default.php
# editar el bloque de variables al inicio con los datos extraídos
```

### 3. Normalizar fotos (si las hay)
```bash
python scripts/rename_folders.py "<ruta_local_con_fotos>"
```
Resultado esperado: carpetas `imagenes/YYYY-MM-DD/` con `.jpg`/`.jpeg`/`.png`.

### 4. Crear el subdominio en Hostinger
Dominio **siempre** bajo `licitacionesgt.com`: `nog<NOG>.licitacionesgt.com`.

Intento 1 — **vía MCP Claude_in_Chrome** (browser automation):
1. `navigate` a `https://hpanel.hostinger.com/websites`.
2. Click en dropdown **Add website → Empty website**.
3. Escribir dominio, click **Use it**.
4. Esperar redirect a onboarding exitoso.

Intento 2 — si el browser MCP no está disponible: pedirle al usuario que cree el website y pausar hasta confirmación.

Verificar por SSH que la ruta existe antes de seguir:
```bash
ssh -p 65002 -i ~/.ssh/id_ed25519 u925954286@88.223.84.32 \
  "ls -d /home/u925954286/domains/nog<NOG>.licitacionesgt.com/public_html 2>&1"
```

### 5. Desplegar archivos
```bash
bash scripts/deploy_new_site.sh nog<NOG>.licitacionesgt.com ./proyectos/<nog>
```
Esto sube `default.php` y todas las carpetas `imagenes/YYYY-MM-DD/`.

### 6. DNS y SSL
El dominio `licitacionesgt.com` usa **nameservers de Hostinger**, por lo que al agregar el website en el paso 4 Hostinger crea el registro A automáticamente y emite SSL Let's Encrypt.

No hay Cloudflare ni DNS externo que tocar. Solo verificar:
```bash
until curl -sI https://nog<NOG>.licitacionesgt.com | grep -q "200"; do sleep 10; done
```
Suele tardar 1–3 minutos desde la creación del website.

### 7. Verificación y registro
```bash
curl -s -o /dev/null -w "%{http_code}\n" https://nog<NOG>.licitacionesgt.com/
```
- Debe devolver `200`.
- Validar visualmente: mapa, tabla de renglones, galería con fotos.
- Commit del `proyectos/<nog>/default.php` al repo.
- Actualizar la página Notion master añadiendo el sitio nuevo al registro del día.

## Lote de contratos

Si el usuario entrega N PDFs a la vez:
1. Extraer datos de los N en paralelo.
2. Confirmarle al usuario la lista de NOGs detectados y el dominio resultante de cada uno antes de crear websites.
3. Ejecutar los pasos 2–7 secuencialmente por NOG (el paso 4 en Hostinger suele requerir UI).
4. Reporte final: tabla `NOG | dominio | status HTTP | # fotos`.

## Reglas importantes

- **Dominio único:** siempre `licitacionesgt.com`. `tecnosis.org` fue un caso especial y **no** se usa para sitios nuevos.
- **Archivo principal:** `default.php` (no `index.php`).
- **Nunca abreviar** `$renglones` ni `$renglones_detallados`.
- **Descripción de renglones:** literal del PDF.
- **Backup antes de sobrescribir:** si el default.php remoto ya existe, guardar `default.php.bak.YYYYMMDD` antes de sobrescribir.
- **Proxy Cloudflare** debe estar OFF mientras Hostinger emite SSL; si no, da 521/522.

## Referencias
- Guía humana: [`docs/NUEVO_PROYECTO.md`](docs/NUEVO_PROYECTO.md)
- Template: [`template/default.php`](template/default.php)
- Scripts: [`scripts/`](scripts/)
- Página master Notion: `342a31f82a7c81098503fb4d6b034652`
