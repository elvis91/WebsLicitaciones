<?php
// ============================================
// DATOS DEL CONTRATO - MEJORAMIENTO CAMINO RURAL TEMPISQUE
// MUNICIPALIDAD DE SALAMÁ, BAJA VERAPAZ
// ============================================

// INFORMACIÓN GENERAL DEL CONTRATO
$nog = "28007484";
$nog_texto = "";
$numero_contrato = "20-2025";
$numero_contrato_texto = "VEINTE GUION DOS MIL VEINTICINCO";

// PROYECTO
$nombre_proyecto = "MEJORAMIENTO CAMINO RURAL SECTOR CENTRO ALDEA TEMPISQUE SALAMÁ, BAJA VERAPAZ";
$titulo_hero = "Mejoramiento Camino Rural Sector Centro Aldea Tempisque";
$descripcion = "Mejoramiento de camino rural en Aldea Tempisque, Salamá";

// UBICACIÓN
$municipio = "Salamá";
$departamento = "Baja Verapaz";
$ubicacion = "Aldea Tempisque, área norte del Municipio de Salamá, Baja Verapaz";
$ubicacion_especifica = "Aldea Tempisque, sector centro, área norte";

// COORDENADAS (aproximadas para Salamá - Aldea Tempisque)
$lat = 15.1500;
$lng = -90.3000;

// AUTORIDAD MUNICIPAL
$alcalde = "VÍCTOR JORDÁN DE LA CRÚZ CRÚZ";
$alcalde_dpi = "1902 71841 1501";
$entidad = "Municipalidad de Salamá, Baja Verapaz";

// CONTRATISTA
$empresa = "CONSTRUCTORA DE OBRAS CIVIL Y SERVICIOS ELÉCTRICOS \"COCSE\"";
$contratista = "CRISTHIAN DARIO MORALES VALDES";
$representante_legal = "CRISTHIAN DARIO MORALES VALDES";
$representante_dpi = "1647 63015 1501";

// MONTOS
$monto = "Q.1,999,925.00";
$monto_total = "Q.1,999,925.00";
$monto_total_texto = "UN MILLÓN NOVECIENTOS NOVENTA Y NUEVE MIL NOVECIENTOS VEINTICINCO QUETZALES";
$iva_incluido = true;

// FINANCIAMIENTO
$fuente_financiamiento = "Consejo Departamental de Desarrollo CODEDE de Baja Verapaz";
$aporte_consejo_departamental = "Q.1,999,925.00";
$aporte_municipal = "Q.0.00";
$aporte_comunidad = "Q.0.00";
$aporte_cocode = "Q.0.00";

// ANTICIPO
$anticipo_porcentaje = "20%";
$anticipo_monto = "Q.399,985.00";
$anticipo_texto = "TRESCIENTOS NOVENTA Y NUEVE MIL NOVECIENTOS OCHENTA Y CINCO QUETZALES";

// FECHAS Y PLAZOS
$plazo = "3 meses";
$plazo_texto = "TRES (3) MESES CALENDARIO";
$fecha_contrato = "2025-11-27";
$fecha_firma = "2025-11-27";
$fecha_inicio = "2025-11-27";
$fecha_fin = "2026-02-27";

// ESTADO
$estatus = "En ejecución";

// ACTAS DE REFERENCIA
$acta_aprobacion = "73-2025";
$fecha_acta_aprobacion = "2025-11-24";

// RENGLONES DE TRABAJO
$renglones = [
    ['num' => '1', 'nombre' => 'TRABAJOS PRELIMINARES', 'cantidad' => '420.00', 'unidad' => 'M'],
    ['num' => '2.01', 'nombre' => 'Corte de Cajuela de Sub-Rasante t=0.25m', 'cantidad' => '625.00', 'unidad' => 'M3'],
    ['num' => '2.02', 'nombre' => 'Nivelación de Sub-Rasante + Compactación', 'cantidad' => '2,500.00', 'unidad' => 'M2'],
    ['num' => '2.03', 'nombre' => 'Colocación de Base de Balasto + Compactación t=0.10m', 'cantidad' => '2,500.00', 'unidad' => 'M2'],
    ['num' => '2.04', 'nombre' => 'Fundición de Pavimento de Concreto t=0.15m', 'cantidad' => '2,164.00', 'unidad' => 'M2'],
    ['num' => '2.05', 'nombre' => 'Corte de Junta + Sello', 'cantidad' => '1,501.50', 'unidad' => 'M'],
    ['num' => '3.01', 'nombre' => 'Fundición de Cuneta de 0.40m + Tallado', 'cantidad' => '840.00', 'unidad' => 'M'],
    ['num' => '4.01', 'nombre' => 'Señalización Horizontal', 'cantidad' => '1,260.00', 'unidad' => 'M'],
    ['num' => '4.02', 'nombre' => 'Señalización Vertical', 'cantidad' => '1.00', 'unidad' => 'UNIDAD'],
    ['num' => '5.01', 'nombre' => 'Limpieza Final', 'cantidad' => '2,500.00', 'unidad' => 'M2']
];

// RENGLONES DETALLADOS CON PRECIOS
$renglones_detallados = [
    [
        'renglon' => '1',
        'categoria' => 'TRABAJOS PRELIMINARES',
        'descripcion' => 'Replanteo Topográfico',
        'cantidad' => '420.00',
        'unidad' => 'M',
        'precio_unitario' => 'Q.14.50',
        'subtotal' => 'Q.6,090.00'
    ],
    [
        'renglon' => '2.01',
        'categoria' => 'PAVIMENTO',
        'descripcion' => 'Corte de Cajuela de Sub-Rasante t=0.25m',
        'cantidad' => '625.00',
        'unidad' => 'M3',
        'precio_unitario' => 'Q.165.00',
        'subtotal' => 'Q.103,125.00'
    ],
    [
        'renglon' => '2.02',
        'categoria' => 'PAVIMENTO',
        'descripcion' => 'Nivelación de Sub-Rasante + Compactación',
        'cantidad' => '2,500.00',
        'unidad' => 'M2',
        'precio_unitario' => 'Q.64.00',
        'subtotal' => 'Q.160,000.00'
    ],
    [
        'renglon' => '2.03',
        'categoria' => 'PAVIMENTO',
        'descripcion' => 'Colocación de Base de Balasto + Compactación t=0.10m',
        'cantidad' => '2,500.00',
        'unidad' => 'M2',
        'precio_unitario' => 'Q.68.00',
        'subtotal' => 'Q.170,000.00'
    ],
    [
        'renglon' => '2.04',
        'categoria' => 'PAVIMENTO',
        'descripcion' => 'Fundición de Pavimento de Concreto t=0.15m',
        'cantidad' => '2,164.00',
        'unidad' => 'M2',
        'precio_unitario' => 'Q.536.50',
        'subtotal' => 'Q.1,160,986.00'
    ],
    [
        'renglon' => '2.05',
        'categoria' => 'PAVIMENTO',
        'descripcion' => 'Corte de Junta + Sello',
        'cantidad' => '1,501.50',
        'unidad' => 'M',
        'precio_unitario' => 'Q.44.50',
        'subtotal' => 'Q.66,816.75'
    ],
    [
        'renglon' => '3.01',
        'categoria' => 'CUNETA',
        'descripcion' => 'Fundición de Cuneta de 0.40m + Tallado',
        'cantidad' => '840.00',
        'unidad' => 'M',
        'precio_unitario' => 'Q.328.50',
        'subtotal' => 'Q.275,940.00'
    ],
    [
        'renglon' => '4.01',
        'categoria' => 'SEÑALIZACIÓN',
        'descripcion' => 'Señalización Horizontal',
        'cantidad' => '1,260.00',
        'unidad' => 'M',
        'precio_unitario' => 'Q.38.00',
        'subtotal' => 'Q.47,880.00'
    ],
    [
        'renglon' => '4.02',
        'categoria' => 'SEÑALIZACIÓN',
        'descripcion' => 'Señalización Vertical',
        'cantidad' => '1.00',
        'unidad' => 'UNIDAD',
        'precio_unitario' => 'Q.2,837.25',
        'subtotal' => 'Q.2,837.25'
    ],
    [
        'renglon' => '5.01',
        'categoria' => 'LIMPIEZA FINAL',
        'descripcion' => 'Limpieza Final',
        'cantidad' => '2,500.00',
        'unidad' => 'M2',
        'precio_unitario' => 'Q.2.50',
        'subtotal' => 'Q.6,250.00'
    ]
];

// CONTACTO - CORREGIDO: Datos de Municipalidad de Salamá, Baja Verapaz
$email_municipalidad = "munisalama@gmail.com";
$telefono_municipalidad = "79400768";
$direccion_municipalidad = "5ta. Calle 8-63 Zona 1, Salamá, Baja Verapaz";
$web_municipalidad = "www.munisalama.gob.gt";

// =========================
// FUNCIÓN CORREGIDA: Parsear montos en formato Q.1,999,925.00
// =========================
function parsearMonto($monto_str) {
    // Remover prefijo "Q." o "Q"
    $limpio = preg_replace('/^Q\.?\s*/', '', $monto_str);
    // Remover comas (separador de miles)
    $limpio = str_replace(',', '', $limpio);
    return (float) $limpio;
}

// =========================
// CALCULAR TOTALES POR CATEGORÍA
// =========================
$totales_categoria = [];
$monto_total_num = parsearMonto($monto_total);

foreach ($renglones_detallados as $rd) {
    $categoria = $rd['categoria'];
    $subtotal_num = parsearMonto($rd['subtotal']);

    if (!isset($totales_categoria[$categoria])) {
        $totales_categoria[$categoria] = 0;
    }
    $totales_categoria[$categoria] += $subtotal_num;
}

// Calcular porcentajes y ordenar por monto
$categorias_json = [];
foreach ($totales_categoria as $cat => $total) {
    $porcentaje = ($monto_total_num > 0) ? ($total / $monto_total_num) * 100 : 0;
    $categorias_json[] = [
        'categoria' => $cat,
        'monto' => $total,
        'porcentaje' => round($porcentaje, 1)
    ];
}

// Ordenar por monto descendente
usort($categorias_json, function($a, $b) {
    return $b['monto'] <=> $a['monto'];
});

// Calcular barras proporcionales (la más grande = 100%)
$monto_maximo = $categorias_json[0]['monto'] ?? 1;
foreach ($categorias_json as &$cat) {
    $cat['barra_porcentaje'] = round(($cat['monto'] / $monto_maximo) * 100, 1);
}
unset($cat);

// =========================
// CALCULAR FINANCIAMIENTO
// =========================
$financiamiento_data = [
    [
        'entidad' => 'Consejo Departamental',
        'monto' => parsearMonto($aporte_consejo_departamental)
    ],
    [
        'entidad' => 'Municipalidad',
        'monto' => parsearMonto($aporte_municipal)
    ],
    [
        'entidad' => 'Comunidad',
        'monto' => parsearMonto($aporte_comunidad)
    ]
];

$financiamiento_filtrado = $financiamiento_data;

$total_financiamiento = array_sum(array_column($financiamiento_filtrado, 'monto'));
foreach ($financiamiento_filtrado as &$f) {
    $f['porcentaje'] = $total_financiamiento > 0 ? round(($f['monto'] / $total_financiamiento) * 100, 1) : 0;
}
unset($f);

// Ordenar por monto descendente
usort($financiamiento_filtrado, function($a, $b) {
    return $b['monto'] <=> $a['monto'];
});

// =========================
// Carga de galerías
// =========================
$baseDir = __DIR__ . '/imagenes';
$baseUrl = 'imagenes';
$galerias = [];
$ext_permitidas = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

if (is_dir($baseDir)) {
    $carpetas = scandir($baseDir);
    foreach ($carpetas as $carpeta) {
        if ($carpeta === '.' || $carpeta === '..') continue;
        $rutaGaleria = $baseDir . '/' . $carpeta;
        if (!is_dir($rutaGaleria)) continue;

        $files = scandir($rutaGaleria);
        $imagenesGaleria = [];

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            $rutaArchivo = $rutaGaleria . '/' . $file;
            if (!is_file($rutaArchivo)) continue;
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($ext, $ext_permitidas, true)) continue;

            $imagenesGaleria[] = [
                'nombre' => $file,
                'url' => $baseUrl . '/' . rawurlencode($carpeta) . '/' . rawurlencode($file),
                'mtime' => filemtime($rutaArchivo),
            ];
        }

        if (empty($imagenesGaleria)) continue;

        usort($imagenesGaleria, function ($a, $b) {
            return $b['mtime'] <=> $a['mtime'];
        });

        $descripcion_archivo = $rutaGaleria . '/descripcion.txt';
        $descripcion_reporte = file_exists($descripcion_archivo)
            ? trim(file_get_contents($descripcion_archivo))
            : 'Registro fotográfico del avance de obra';

        $fecha_legible = $carpeta;
        $dt = DateTime::createFromFormat('Y-m-d', $carpeta);
        if ($dt !== false) {
            $fecha_legible = $dt->format('d/m/Y');
        }

        $galerias[] = [
            'id' => preg_replace('/[^a-zA-Z0-9_-]/', '-', $carpeta),
            'carpeta' => $carpeta,
            'fecha_obj' => $dt ?: null,
            'fecha' => $fecha_legible,
            'descripcion' => $descripcion_reporte,
            'imagenes' => $imagenesGaleria,
        ];
    }

    usort($galerias, function ($a, $b) {
        if ($a['fecha_obj'] && $b['fecha_obj']) {
            return $b['fecha_obj'] <=> $a['fecha_obj'];
        }
        return ($b['imagenes'][0]['mtime'] ?? 0) <=> ($a['imagenes'][0]['mtime'] ?? 0);
    });
}

$total_publicaciones = count($galerias);
$total_fotos = array_sum(array_map(function($g) { return count($g['imagenes']); }, $galerias));

$hoy = new DateTime();
$fecha_inicio_dt = new DateTime($fecha_inicio);
$fecha_fin_dt = new DateTime($fecha_fin);
$dias_totales = $fecha_inicio_dt->diff($fecha_fin_dt)->days;
$dias_transcurridos = max(0, min($fecha_inicio_dt->diff($hoy)->days, $dias_totales));
$porcentaje_tiempo = $dias_totales > 0 ? round(($dias_transcurridos / $dias_totales) * 100, 1) : 0;

$ultima_actualizacion = null;
if (!empty($galerias)) {
    $ultima_fecha = reset($galerias)['fecha_obj'];
    if ($ultima_fecha) {
        $ultima_actualizacion = $hoy->diff($ultima_fecha)->days;
    }
}

$lightboxData = [];
foreach ($galerias as $g) {
    $lightboxData[] = array_map(function ($img) { return $img['url']; }, $g['imagenes']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Proyecto NOG <?php echo htmlspecialchars($nog); ?> - Seguimiento de Obra</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <style>
    :root {
      --primary: #2563eb;
      --primary-dark: #1e40af;
      --secondary: #7c3aed;
      --accent: #0ea5e9;
      --success: #10b981;
      --warning: #f59e0b;
      --bg-main: #0f172a;
      --bg-secondary: #1e293b;
      --text-primary: #0f172a;
      --text-secondary: #64748b;
      --border: #e2e8f0;
      --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
      --max-width: 1400px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'Inter', -apple-system, sans-serif;
      color: var(--text-primary);
      background: #f8fafc;
      line-height: 1.6;
    }

    /* NAVBAR */
    .navbar {
      position: sticky;
      top: 0;
      z-index: 999;
      background: rgba(15, 23, 42, 0.95);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    .navbar-inner {
      max-width: var(--max-width);
      margin: 0 auto;
      padding: 14px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      color: white;
    }

    .brand-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: linear-gradient(135deg, #3b82f6, #7c3aed);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
    }

    .brand-text h1 {
      font-size: 1rem;
      font-weight: 700;
      letter-spacing: -0.01em;
    }

    .brand-text p {
      font-size: 0.8rem;
      opacity: 0.8;
    }

    .nav-links {
      display: flex;
      gap: 28px;
      align-items: center;
    }

    .nav-links a {
      color: rgba(255, 255, 255, 0.85);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
      transition: all 0.2s;
      position: relative;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: white;
      transition: width 0.2s;
    }

    .nav-links a:hover {
      color: white;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-badge {
      padding: 8px 16px;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--success), #059669);
      color: white;
      font-size: 0.8rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 6px;
      box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
      animation: pulse-badge 2s infinite;
    }

    @keyframes pulse-badge {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.8; }
    }

    /* MOBILE MENU */
    .mobile-menu-toggle {
      display: none;
      width: 44px;
      height: 44px;
      background: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 8px;
      cursor: pointer;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 5px;
      transition: all 0.3s ease;
    }

    .mobile-menu-toggle span {
      width: 22px;
      height: 2px;
      background: white;
      border-radius: 2px;
      transition: all 0.3s ease;
    }

    .mobile-menu-toggle.active span:nth-child(1) {
      transform: rotate(45deg) translate(6px, 6px);
    }

    .mobile-menu-toggle.active span:nth-child(2) {
      opacity: 0;
    }

    .mobile-menu-toggle.active span:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }

    /* HERO */
    .hero {
      background: linear-gradient(135deg, #1e3a8a 0%, #312e81 100%);
      padding: 48px 24px 80px;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .hero-inner {
      max-width: var(--max-width);
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      font-size: 0.85rem;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .hero-content {
      max-width: 900px;
    }

    .hero-title {
      font-size: clamp(2rem, 4vw, 3.5rem);
      font-weight: 900;
      line-height: 1.1;
      margin-bottom: 12px;
      letter-spacing: -0.02em;
    }

    .hero-subtitle {
      font-size: 1.15rem;
      opacity: 0.95;
      margin-bottom: 24px;
      font-weight: 500;
    }

    .hero-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      font-size: 0.9rem;
      opacity: 0.9;
      margin-bottom: 32px;
    }

    .hero-meta-item {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .hero-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 16px;
      max-width: 800px;
    }

    .stat-box {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 16px;
      padding: 20px;
      text-align: center;
      transition: all 0.3s;
    }

    .stat-box:hover {
      background: rgba(255, 255, 255, 0.15);
      transform: translateY(-2px);
    }

    .stat-value {
      font-size: 2.2rem;
      font-weight: 800;
      display: block;
      margin-bottom: 4px;
      line-height: 1;
    }

    .stat-label {
      font-size: 0.85rem;
      opacity: 0.9;
      font-weight: 500;
    }

    /* MAIN */
    .main {
      max-width: var(--max-width);
      margin: -40px auto 0;
      padding: 0 24px 80px;
      position: relative;
      z-index: 2;
    }

    .card {
      background: white;
      border-radius: 20px;
      padding: 32px;
      box-shadow: 0 10px 40px rgba(15, 23, 42, 0.08);
      border: 1px solid var(--border);
      margin-bottom: 32px;
    }

    .section-header { margin-bottom: 28px; }

    .section-icon {
      width: 56px;
      height: 56px;
      border-radius: 14px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      margin-bottom: 16px;
      box-shadow: 0 8px 24px rgba(37, 99, 235, 0.25);
    }

    .section-title {
      font-size: 1.75rem;
      font-weight: 800;
      margin-bottom: 8px;
      color: var(--text-primary);
    }

    .section-subtitle {
      color: var(--text-secondary);
      font-size: 1rem;
    }

    /* TIMELINE */
    .timeline-container { position: relative; padding: 40px 0; }

    .timeline-bar-wrapper { position: relative; height: 80px; margin: 20px 0; }

    .timeline-bar {
      position: absolute;
      top: 40px;
      left: 0;
      right: 0;
      height: 8px;
      background: #e5e7eb;
      border-radius: 999px;
      overflow: hidden;
    }

    .timeline-progress {
      height: 100%;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 999px;
      transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 0 20px rgba(37, 99, 235, 0.4);
    }

    .timeline-point {
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 20px;
      height: 20px;
      background: white;
      border: 4px solid var(--primary);
      border-radius: 50%;
      cursor: pointer;
      transition: all 0.3s;
      z-index: 10;
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    .timeline-point:hover {
      transform: translate(-50%, -50%) scale(1.3);
      border-width: 5px;
      box-shadow: 0 6px 20px rgba(37, 99, 235, 0.5);
    }

    .timeline-point.has-photos {
      background: var(--primary);
      animation: pulse-point 2s infinite;
    }

    @keyframes pulse-point {
      0%, 100% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7); }
      50% { box-shadow: 0 0 0 10px rgba(37, 99, 235, 0); }
    }

    .timeline-tooltip {
      position: absolute;
      bottom: 100%;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(15, 23, 42, 0.95);
      color: white;
      padding: 8px 12px;
      border-radius: 8px;
      font-size: 0.8rem;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.2s;
      margin-bottom: 8px;
    }

    .timeline-point:hover .timeline-tooltip { opacity: 1; }

    .timeline-labels {
      display: flex;
      justify-content: space-between;
      margin-top: 12px;
      font-size: 0.9rem;
      color: var(--text-secondary);
      font-weight: 600;
    }

    .timeline-info {
      text-align: center;
      margin-top: 24px;
      padding: 16px;
      background: #f1f5f9;
      border-radius: 12px;
      font-size: 0.9rem;
      color: var(--text-secondary);
    }

    /* MAPA */
    #map {
      width: 100%;
      height: 400px;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(15, 23, 42, 0.1);
    }

    .map-disclaimer {
      margin-top: 12px;
      padding: 12px 16px;
      background: #fef3c7;
      border-left: 4px solid var(--warning);
      border-radius: 8px;
      font-size: 0.85rem;
      color: #92400e;
    }

    /* RESUMEN FINANCIERO */
    .financial-summary {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-bottom: 32px;
    }

    .summary-card {
      background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
      border-radius: 16px;
      padding: 24px;
      border: 1px solid var(--border);
      box-shadow: 0 4px 12px rgba(15, 23, 42, 0.05);
      transition: all 0.3s ease;
    }

    .summary-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 24px rgba(15, 23, 42, 0.1);
    }

    .summary-card-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 16px;
    }

    .summary-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
    }

    .summary-icon.primary { background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; }
    .summary-icon.success { background: linear-gradient(135deg, var(--success), #059669); color: white; }
    .summary-icon.warning { background: linear-gradient(135deg, var(--warning), #f59e0b); color: white; }

    .summary-amount {
      font-size: 2rem;
      font-weight: 800;
      color: var(--text-primary);
      line-height: 1;
      margin-bottom: 4px;
    }

    .summary-label {
      font-size: 0.85rem;
      color: var(--text-secondary);
      font-weight: 500;
    }

    /* Gráfica de Financiamiento */
    .financing-chart {
      display: grid;
      grid-template-columns: 240px 1fr;
      gap: 32px;
      margin-top: 24px;
      align-items: center;
    }

    .chart-visual {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .chart-legend {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .legend-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px;
      background: #f8fafc;
      border-radius: 12px;
      border: 1px solid var(--border);
      transition: all 0.2s ease;
    }

    .legend-item:hover {
      background: white;
      border-color: var(--primary);
      transform: translateX(4px);
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
    }

    .legend-color {
      width: 16px;
      height: 16px;
      border-radius: 4px;
      flex-shrink: 0;
    }

    .legend-color.primary { background: linear-gradient(135deg, var(--primary), var(--secondary)); }
    .legend-color.success { background: linear-gradient(135deg, var(--success), #059669); }
    .legend-color.warning { background: linear-gradient(135deg, var(--warning), #f59e0b); }
    .legend-color.accent  { background: linear-gradient(135deg, var(--accent), #0284c7); }

    .legend-info { flex: 1; }

    .legend-name {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--text-primary);
      margin-bottom: 2px;
    }

    .legend-value {
      font-size: 1.05rem;
      font-weight: 800;
      color: var(--primary);
    }

    .legend-percentage {
      font-size: 0.75rem;
      color: var(--text-secondary);
      font-weight: 600;
      margin-left: 6px;
    }

    /* Distribución por categoría */
    .category-distribution {
      margin-top: 32px;
      padding-top: 32px;
      border-top: 2px solid #e5e7eb;
    }

    .category-item { margin-bottom: 16px; }

    .category-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 8px;
      gap: 12px;
    }

    .category-name { font-size: 0.9rem; font-weight: 600; color: var(--text-primary); flex: 1; }
    .category-amount { font-size: 0.85rem; font-weight: 700; color: var(--primary); white-space: nowrap; }
    .category-percentage { font-size: 0.8rem; font-weight: 600; color: var(--text-secondary); min-width: 45px; text-align: right; }

    .category-bar {
      height: 12px;
      background: #e5e7eb;
      border-radius: 999px;
      overflow: hidden;
      position: relative;
    }

    .category-bar-fill {
      height: 100%;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 999px;
      transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
    }

    /* RENGLONES EXPANDIBLES */
    .renglones-grid { display: grid; gap: 10px; }

    .renglon-item {
      display: grid;
      grid-template-columns: 40px 1fr auto;
      gap: 14px;
      align-items: center;
      padding: 14px 40px 14px 16px;
      background: #f8fafc;
      border-radius: 12px;
      border: 1px solid var(--border);
      transition: all 0.2s;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .renglon-item.expandible::after {
      content: '\25BC';
      position: absolute;
      right: 16px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 0.7rem;
      color: var(--primary);
      transition: transform 0.3s ease;
      font-weight: 700;
    }

    .renglon-item.expandible.expanded::after {
      transform: translateY(-50%) rotate(180deg);
    }

    .renglon-item.expandible:hover {
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    }

    .renglon-item:hover {
      background: #f1f5f9;
      border-color: var(--primary);
    }

    .renglon-num {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 0.9rem;
    }

    .renglon-text { font-size: 0.9rem; color: var(--text-primary); font-weight: 500; }
    .renglon-cantidad { font-size: 0.85rem; color: var(--text-secondary); font-weight: 600; white-space: nowrap; }

    .renglon-details {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      background: white;
      border-radius: 0 0 12px 12px;
      margin-top: -1px;
      border: 1px solid var(--border);
      border-top: none;
    }

    .renglon-item.expanded + .renglon-details {
      max-height: 500px;
      margin-bottom: 10px;
    }

    .renglon-details-inner { padding: 20px; border-top: 2px solid #e5e7eb; }

    .renglon-meta {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 16px;
      margin-bottom: 16px;
    }

    .renglon-meta-item { background: #f8fafc; padding: 12px; border-radius: 8px; border: 1px solid #e5e7eb; }

    .renglon-meta-label {
      font-size: 0.7rem;
      text-transform: uppercase;
      color: var(--text-secondary);
      font-weight: 600;
      letter-spacing: 0.05em;
      margin-bottom: 4px;
    }

    .renglon-meta-value { font-size: 1.05rem; font-weight: 700; color: var(--text-primary); }
    .renglon-meta-value.precio { color: var(--primary); font-size: 1.2rem; }

    .renglon-category-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 12px;
      border-radius: 999px;
      background: linear-gradient(135deg, #eff6ff, #dbeafe);
      color: var(--primary-dark);
      font-size: 0.75rem;
      font-weight: 600;
      margin-bottom: 12px;
    }

    .renglon-progress-bar { height: 8px; background: #e5e7eb; border-radius: 999px; overflow: hidden; margin-top: 8px; }

    .renglon-progress-fill {
      height: 100%;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 999px;
      transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .renglones-pagination { text-align: center; margin-top: 24px; padding-top: 24px; border-top: 2px solid #e5e7eb; }
    .renglones-showing { font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 16px; }
    .btn-load-renglones { min-width: 200px; }

    /* CONTROLES DE GALERÍA */
    .gallery-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 20px;
      background: #f8fafc;
      border-radius: 12px;
      margin-top: 20px;
      flex-wrap: wrap;
      gap: 16px;
    }

    .gallery-info { font-size: 0.95rem; color: var(--text-secondary); }
    .gallery-filter { display: flex; align-items: center; gap: 10px; }
    .gallery-filter label { font-size: 0.9rem; font-weight: 600; color: var(--text-primary); }

    .filter-select {
      padding: 8px 16px;
      border-radius: 8px;
      border: 1px solid var(--border);
      background: white;
      font-size: 0.9rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s;
    }

    .filter-select:hover { border-color: var(--primary); }

    .filter-select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .load-more-container { text-align: center; margin: 40px 0; }
    .btn-load-more { min-width: 200px; }

    /* TIMELINE VERTICAL GALERÍAS */
    .timeline-galerias { position: relative; padding: 40px 0; }

    .timeline-galerias::before {
      content: '';
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 3px;
      background: linear-gradient(180deg, var(--primary), var(--accent));
      transform: translateX(-50%);
    }

    .timeline-galeria-item { position: relative; margin-bottom: 60px; }

    .timeline-dot-vertical {
      position: absolute;
      left: 50%;
      top: 40px;
      width: 24px;
      height: 24px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      border: 4px solid white;
      border-radius: 50%;
      transform: translateX(-50%);
      z-index: 2;
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2);
    }

    .galeria-card.card-left { margin-right: calc(50% + 40px); }
    .galeria-card.card-right { margin-left: calc(50% + 40px); }

    .galeria-card {
      background: white;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(15, 23, 42, 0.06);
      border: 1px solid var(--border);
      transition: all 0.35s ease;
    }

    .galeria-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12);
    }

    .galeria-preview {
      position: relative;
      height: 260px;
      overflow: hidden;
      cursor: pointer;
      background: #f1f5f9;
    }

    .galeria-preview img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .galeria-card:hover .galeria-preview img { transform: scale(1.08); }

    .galeria-count {
      position: absolute;
      top: 14px;
      right: 14px;
      padding: 8px 14px;
      border-radius: 999px;
      background: rgba(0, 0, 0, 0.75);
      backdrop-filter: blur(10px);
      color: white;
      font-size: 0.8rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .galeria-body { padding: 22px; }

    .galeria-date {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 12px;
      border-radius: 999px;
      background: linear-gradient(135deg, #eff6ff, #dbeafe);
      color: var(--primary-dark);
      font-size: 0.8rem;
      font-weight: 600;
      margin-bottom: 12px;
    }

    .galeria-title { font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; color: var(--text-primary); }
    .galeria-desc { color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 18px; line-height: 1.6; }

    .galeria-thumbs {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(65px, 1fr));
      gap: 6px;
      margin-bottom: 18px;
    }

    .thumb {
      aspect-ratio: 1;
      border-radius: 10px;
      overflow: hidden;
      cursor: pointer;
      transition: all 0.25s ease;
      border: 2px solid transparent;
    }

    .thumb:hover {
      transform: scale(1.08);
      border-color: var(--primary);
      box-shadow: 0 6px 16px rgba(37, 99, 235, 0.3);
      z-index: 10;
    }

    .thumb img { width: 100%; height: 100%; object-fit: cover; }

    .thumb-more {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
      font-size: 0.95rem;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 12px 24px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 0.9rem;
      cursor: pointer;
      transition: all 0.3s ease;
      border: none;
      text-decoration: none;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      box-shadow: 0 4px 16px rgba(37, 99, 235, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(37, 99, 235, 0.4);
    }

    /* INFO GRID */
    .info-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 18px;
    }

    .info-item {
      padding: 18px;
      background: #f8fafc;
      border-radius: 12px;
      border: 1px solid var(--border);
      transition: all 0.2s;
    }

    .info-item:hover {
      background: white;
      border-color: var(--primary);
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
    }

    .info-label {
      font-size: 0.75rem;
      font-weight: 600;
      color: var(--text-secondary);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 6px;
    }

    .info-value { font-size: 0.95rem; color: var(--text-primary); font-weight: 600; }

    /* LIGHTBOX */
    .lightbox {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.95);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10000;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      padding: 20px;
    }

    .lightbox.abierto { opacity: 1; visibility: visible; }

    .lightbox-content {
      position: relative;
      max-width: 90vw;
      max-height: 90vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .lightbox-image {
      max-width: 100%;
      max-height: 70vh;
      border-radius: 10px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8);
      object-fit: contain;
    }

    .lightbox-thumbs {
      display: flex;
      gap: 8px;
      max-width: 90vw;
      overflow-x: auto;
      padding: 10px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      backdrop-filter: blur(10px);
    }

    .lightbox-thumbs::-webkit-scrollbar { height: 6px; }
    .lightbox-thumbs::-webkit-scrollbar-track { background: rgba(255, 255, 255, 0.1); border-radius: 3px; }
    .lightbox-thumbs::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.3); border-radius: 3px; }

    .lightbox-thumb {
      width: 80px;
      height: 80px;
      border-radius: 8px;
      overflow: hidden;
      cursor: pointer;
      flex-shrink: 0;
      border: 3px solid transparent;
      transition: all 0.2s;
      opacity: 0.6;
    }

    .lightbox-thumb:hover { opacity: 1; transform: scale(1.05); }

    .lightbox-thumb.active {
      border-color: var(--primary);
      opacity: 1;
      box-shadow: 0 0 20px rgba(37, 99, 235, 0.6);
    }

    .lightbox-thumb img { width: 100%; height: 100%; object-fit: cover; }

    .lightbox-close {
      position: fixed;
      top: 24px;
      right: 24px;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: white;
      font-size: 1.6rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10001;
    }

    .lightbox-close:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: rotate(90deg) scale(1.1);
    }

    .lightbox-controls {
      position: fixed;
      top: 50%;
      left: 0;
      right: 0;
      transform: translateY(-50%);
      display: flex;
      justify-content: space-between;
      padding: 0 24px;
      pointer-events: none;
      z-index: 10001;
    }

    .lightbox-btn {
      pointer-events: auto;
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: white;
      font-size: 1.6rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .lightbox-btn:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: scale(1.15);
    }

    .lightbox-info {
      position: fixed;
      bottom: 32px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      color: white;
      padding: 10px 20px;
      border-radius: 999px;
      font-size: 0.9rem;
      font-weight: 500;
      z-index: 10001;
    }

    /* SCROLL TO TOP */
    .scroll-top {
      position: fixed;
      bottom: 32px;
      right: 32px;
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      box-shadow: 0 8px 24px rgba(37, 99, 235, 0.4);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 998;
    }

    .scroll-top.visible { opacity: 1; visibility: visible; }
    .scroll-top:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(37, 99, 235, 0.5); }

    /* FOOTER */
    .footer {
      background: var(--bg-main);
      color: white;
      padding: 48px 24px 32px;
      margin-top: 60px;
    }

    .footer-inner { max-width: var(--max-width); margin: 0 auto; }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
      margin-bottom: 40px;
    }

    .footer-title { font-size: 1.1rem; font-weight: 700; margin-bottom: 16px; color: white; }
    .footer-text { color: rgba(255, 255, 255, 0.7); line-height: 1.8; font-size: 0.95rem; }
    .footer-text a { transition: color 0.2s; }
    .footer-text a:hover { color: white; }

    .footer-dev {
      background: rgba(255, 255, 255, 0.05);
      padding: 24px;
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .dev-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      border-radius: 999px;
      margin-top: 12px;
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    .footer-bottom {
      padding-top: 24px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.85rem;
      text-align: center;
    }

    /* EMPTY STATE */
    .empty-state {
      text-align: center;
      padding: 80px 24px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(15, 23, 42, 0.08);
    }

    .empty-icon { font-size: 4rem; margin-bottom: 24px; opacity: 0.5; }
    .empty-title { font-size: 1.5rem; font-weight: 700; margin-bottom: 12px; }
    .empty-text { color: var(--text-secondary); max-width: 500px; margin: 0 auto; line-height: 1.7; }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .mobile-menu-toggle { display: flex; }
      .nav-links { display: none; }

      .nav-links.mobile-open {
        display: flex !important;
        position: fixed;
        top: 72px;
        left: 0;
        right: 0;
        background: rgba(15, 23, 42, 0.98);
        backdrop-filter: blur(12px);
        flex-direction: column;
        padding: 24px;
        gap: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        animation: slideDown 0.3s ease;
      }

      @keyframes slideDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
      }

      .hero { padding: 36px 20px 60px; }
      .hero-stats { grid-template-columns: repeat(2, 1fr); }
      .main { padding: 0 16px 60px; }
      .card { padding: 24px; }
      #map { height: 300px; }
      .timeline-bar-wrapper { height: 60px; }
      .timeline-galerias::before { display: none; }
      .galeria-card.card-left, .galeria-card.card-right { margin: 0; }
      .timeline-dot-vertical { left: 20px; }
      .timeline-galeria-item { padding-left: 50px; }
      .lightbox-image { max-height: 60vh; }
      .lightbox-thumbs { max-width: 95vw; }
      .lightbox-thumb { width: 60px; height: 60px; }
      .lightbox-close, .lightbox-btn { width: 44px; height: 44px; }
      .scroll-top { bottom: 24px; right: 24px; width: 48px; height: 48px; }
      .gallery-controls { flex-direction: column; align-items: stretch; }
      .gallery-info, .gallery-filter { width: 100%; justify-content: center; }
      .footer-grid { grid-template-columns: 1fr; gap: 32px; }
      .footer-dev { order: -1; }
      .summary-amount { font-size: 1.6rem; }
      .renglon-meta { grid-template-columns: 1fr; }
      .financing-chart { grid-template-columns: 1fr; gap: 24px; }
      .chart-visual { order: -1; }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="navbar-inner">
    <div class="brand">
      <div class="brand-icon">&#x1F3D7;&#xFE0F;</div>
      <div class="brand-text">
        <h1>NOG <?php echo htmlspecialchars($nog); ?></h1>
        <p><?php echo htmlspecialchars($municipio); ?></p>
      </div>
    </div>
    <div class="nav-links">
      <a href="#timeline">Timeline</a>
      <a href="#ubicacion">Ubicaci&oacute;n</a>
      <a href="#galerias">Galer&iacute;as</a>
      <a href="#financiero">Financiero</a>
      <a href="#renglones">Renglones</a>
      <a href="#info">Informaci&oacute;n</a>
    </div>
    <div class="nav-badge">
      <span>&#x25CF;</span>
      <span><?php echo htmlspecialchars($estatus); ?></span>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">
    <div class="hero-badge">
      &#x1F4CB; Contrato <?php echo htmlspecialchars($numero_contrato); ?>
    </div>

    <div class="hero-content">
      <h2 class="hero-title"><?php echo htmlspecialchars($titulo_hero); ?></h2>
      <p class="hero-subtitle"><?php echo htmlspecialchars($ubicacion); ?></p>

      <div class="hero-meta">
        <span class="hero-meta-item">
          &#x1F477; <strong><?php echo htmlspecialchars($empresa); ?></strong>
        </span>
        <span class="hero-meta-item">
          &#x1F4B0; <strong><?php echo htmlspecialchars($monto); ?></strong>
        </span>
        <span class="hero-meta-item">
          &#x23F1;&#xFE0F; <strong><?php echo htmlspecialchars($plazo); ?></strong>
        </span>
      </div>
    </div>

    <div class="hero-stats">
      <div class="stat-box">
        <span class="stat-value"><?php echo $total_publicaciones; ?></span>
        <span class="stat-label">Reportes</span>
      </div>
      <div class="stat-box">
        <span class="stat-value"><?php echo $total_fotos; ?></span>
        <span class="stat-label">Fotograf&iacute;as</span>
      </div>
      <div class="stat-box">
        <span class="stat-value"><?php echo $dias_transcurridos; ?></span>
        <span class="stat-label">D&iacute;as transcurridos</span>
      </div>
      <div class="stat-box">
        <span class="stat-value"><?php echo $porcentaje_tiempo; ?>%</span>
        <span class="stat-label">Tiempo del proyecto</span>
      </div>
      <?php if ($ultima_actualizacion !== null): ?>
      <div class="stat-box">
        <span class="stat-value"><?php echo $ultima_actualizacion; ?>d</span>
        <span class="stat-label">&Uacute;ltima actualizaci&oacute;n</span>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- MAIN -->
<main class="main">

  <!-- TIMELINE -->
  <section id="timeline" class="card">
    <div class="section-header">
      <span class="section-icon">&#x1F4CA;</span>
      <h3 class="section-title">L&iacute;nea de Tiempo del Proyecto</h3>
      <p class="section-subtitle">Visualizaci&oacute;n del progreso y publicaciones realizadas</p>
    </div>

    <div class="timeline-container">
      <div class="timeline-bar-wrapper">
        <div class="timeline-bar">
          <div class="timeline-progress" style="width: 0%"></div>
        </div>

        <div class="timeline-point" style="left: 0%">
          <div class="timeline-tooltip">Inicio: <?php echo date('d/m/Y', strtotime($fecha_inicio)); ?></div>
        </div>

        <?php foreach ($galerias as $gIndex => $gal): ?>
          <?php if ($gal['fecha_obj']): ?>
            <?php
              $dias_desde_inicio = $fecha_inicio_dt->diff($gal['fecha_obj'])->days;
              $posicion = $dias_totales > 0 ? min(100, ($dias_desde_inicio / $dias_totales) * 100) : 0;
              $total_fotos_pub = count($gal['imagenes']);
            ?>
            <div class="timeline-point has-photos"
                 style="left: <?php echo $posicion; ?>%"
                 data-galeria="<?php echo $gIndex; ?>">
              <div class="timeline-tooltip">
                <?php echo htmlspecialchars($gal['fecha']); ?><br>
                <?php echo $total_fotos_pub; ?> foto<?php echo $total_fotos_pub > 1 ? 's' : ''; ?>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <div class="timeline-point" style="left: <?php echo $porcentaje_tiempo; ?>%; border-color: #f59e0b; background: #f59e0b;">
          <div class="timeline-tooltip">Hoy: <?php echo date('d/m/Y'); ?></div>
        </div>

        <div class="timeline-point" style="left: 100%">
          <div class="timeline-tooltip">Fin: <?php echo date('d/m/Y', strtotime($fecha_fin)); ?></div>
        </div>
      </div>

      <div class="timeline-labels">
        <span><?php echo date('d/m/Y', strtotime($fecha_inicio)); ?></span>
        <span>Hoy (D&iacute;a <?php echo $dias_transcurridos; ?> de <?php echo $dias_totales; ?>)</span>
        <span><?php echo date('d/m/Y', strtotime($fecha_fin)); ?></span>
      </div>

      <div class="timeline-info">
        &#x23F1;&#xFE0F; <strong>Plazo contractual:</strong> <?php echo htmlspecialchars($plazo); ?> desde el <?php echo date('d/m/Y', strtotime($fecha_inicio)); ?>.
        Fecha estimada de terminaci&oacute;n: <strong><?php echo date('d/m/Y', strtotime($fecha_fin)); ?></strong>
      </div>
    </div>
  </section>

  <!-- MAPA -->
  <section id="ubicacion" class="card">
    <div class="section-header">
      <span class="section-icon">&#x1F4CD;</span>
      <h3 class="section-title">Ubicaci&oacute;n del Proyecto</h3>
      <p class="section-subtitle"><?php echo htmlspecialchars($ubicacion); ?></p>
    </div>

    <div id="map"></div>

    <div class="map-disclaimer">
      &#x26A0;&#xFE0F; <strong>Nota:</strong> La ubicaci&oacute;n mostrada es aproximada. El proyecto se ejecuta en <?php echo htmlspecialchars($ubicacion); ?>.
    </div>
  </section>

  <!-- GALERÍAS CON PAGINACIÓN -->
  <section id="galerias">
    <div class="card" style="padding-bottom: 16px;">
      <div class="section-header">
        <span class="section-icon">&#x1F4F8;</span>
        <h3 class="section-title">Galer&iacute;a de Avances</h3>
        <p class="section-subtitle">Documentaci&oacute;n fotogr&aacute;fica del progreso de la obra</p>
      </div>

      <?php if (!empty($galerias)): ?>
      <div class="gallery-controls">
        <div class="gallery-info">
          Mostrando <strong><span id="countShowing">10</span></strong> de <strong><?php echo $total_publicaciones; ?></strong> publicaciones
        </div>
        <div class="gallery-filter">
          <label for="filterSelect">&#x1F4C5; Filtrar:</label>
          <select id="filterSelect" class="filter-select">
            <option value="10">&Uacute;ltimas 10</option>
            <option value="last-month">&Uacute;ltimo mes</option>
            <option value="last-3-months">&Uacute;ltimos 3 meses</option>
            <option value="last-6-months">&Uacute;ltimos 6 meses</option>
            <option value="year-2025">Todo 2025</option>
            <option value="year-2024">Todo 2024</option>
            <option value="all">Todas las publicaciones</option>
          </select>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <?php if (!empty($galerias)): ?>
      <div class="timeline-galerias" id="galeriasContainer">
        <?php foreach ($galerias as $gIndex => $gal): ?>
          <?php
            $primera = $gal['imagenes'][0];
            $total = count($gal['imagenes']);
            $is_even = $gIndex % 2 === 0;
            $data_date = $gal['fecha_obj'] ? $gal['fecha_obj']->format('Y-m-d') : '';
          ?>
          <div class="timeline-galeria-item galeria-item" data-index="<?php echo $gIndex; ?>" data-date="<?php echo $data_date; ?>" style="display: <?php echo $gIndex < 10 ? 'block' : 'none'; ?>">
            <div class="timeline-dot-vertical"></div>
            <article class="galeria-card <?php echo $is_even ? 'card-left' : 'card-right'; ?>">
              <div class="galeria-preview" data-galeria="<?php echo $gIndex; ?>" data-index="0">
                <img src="<?php echo htmlspecialchars($primera['url']); ?>"
                     alt="Reporte <?php echo htmlspecialchars($gal['fecha']); ?>"
                     loading="lazy">
                <span class="galeria-count">
                  &#x1F4F7; <?php echo $total; ?>
                </span>
              </div>

              <div class="galeria-body">
                <span class="galeria-date">
                  &#x1F4C5; <?php echo htmlspecialchars($gal['fecha']); ?>
                </span>

                <h4 class="galeria-title">Reporte de Avance</h4>

                <p class="galeria-desc">
                  <?php echo htmlspecialchars($gal['descripcion']); ?>
                </p>

                <?php if ($total > 1): ?>
                <div class="galeria-thumbs">
                  <?php foreach (array_slice($gal['imagenes'], 1, 5) as $imgIndex => $img): ?>
                    <div class="thumb" data-galeria="<?php echo $gIndex; ?>" data-index="<?php echo $imgIndex + 1; ?>">
                      <img src="<?php echo htmlspecialchars($img['url']); ?>" alt="Miniatura" loading="lazy">
                    </div>
                  <?php endforeach; ?>
                  <?php if ($total > 6): ?>
                    <div class="thumb thumb-more" data-galeria="<?php echo $gIndex; ?>" data-index="6">
                      +<?php echo $total - 6; ?>
                    </div>
                  <?php endif; ?>
                </div>
                <?php endif; ?>

                <button class="btn btn-primary" data-galeria="<?php echo $gIndex; ?>" data-index="0">
                  Ver galer&iacute;a completa &rarr;
                </button>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="load-more-container" id="loadMoreContainer">
        <button class="btn btn-primary btn-load-more" id="btnLoadMore">
          Cargar 10 m&aacute;s &darr;
        </button>
      </div>
    <?php else: ?>
      <div class="empty-state">
        <div class="empty-icon">&#x1F4F7;</div>
        <h4 class="empty-title">A&uacute;n no hay reportes publicados</h4>
        <p class="empty-text">
          Los reportes fotogr&aacute;ficos del avance de obra se publicar&aacute;n pr&oacute;ximamente en esta secci&oacute;n.
        </p>
      </div>
    <?php endif; ?>
  </section>

  <!-- RESUMEN FINANCIERO -->
  <section id="financiero" class="card" style="margin-top: 32px;">
    <div class="section-header">
      <span class="section-icon">&#x1F4B0;</span>
      <h3 class="section-title">Resumen Financiero</h3>
      <p class="section-subtitle">Distribuci&oacute;n del presupuesto y fuentes de financiamiento</p>
    </div>

    <div class="financial-summary">
      <div class="summary-card">
        <div class="summary-card-header">
          <div class="summary-icon primary">&#x1F4CA;</div>
          <div>
            <div class="summary-label">Monto Total Adjudicado</div>
            <div class="summary-amount"><?php echo htmlspecialchars($monto_total); ?></div>
          </div>
        </div>
      </div>

      <div class="summary-card">
        <div class="summary-card-header">
          <div class="summary-icon success">&#x1F4B5;</div>
          <div>
            <div class="summary-label">Anticipo (<?php echo $anticipo_porcentaje; ?>)</div>
            <div class="summary-amount"><?php echo htmlspecialchars($anticipo_monto); ?></div>
          </div>
        </div>
      </div>

      <div class="summary-card">
        <div class="summary-card-header">
          <div class="summary-icon warning">&#x1F4CB;</div>
          <div>
            <div class="summary-label">Renglones de Trabajo</div>
            <div class="summary-amount" style="font-size: 2.5rem;">
              <?php echo count($renglones_detallados); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Gráfica de Financiamiento -->
    <div style="margin-top: 32px; padding-top: 32px; border-top: 2px solid #e5e7eb;">
      <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 20px; color: var(--text-primary);">
        &#x1F3DB;&#xFE0F; Fuentes de Financiamiento
      </h4>

      <div class="financing-chart">
        <div class="chart-visual">
          <?php
          $entidades_con_aporte = array_filter($financiamiento_filtrado, function($f) {
            return $f['monto'] > 0;
          });
          $num_fuentes = count($entidades_con_aporte);
          ?>
          <?php if ($num_fuentes === 1): ?>
            <?php $fuente_unica = reset($entidades_con_aporte); ?>
            <div style="width: 220px; height: 220px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--secondary)); display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(37, 99, 235, 0.2);">
              <div style="width: 140px; height: 140px; background: white; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">100%</div>
                <div style="font-size: 0.7rem; color: var(--text-secondary); font-weight: 600; text-transform: uppercase; margin-top: 4px; text-align: center; padding: 0 10px;"><?php echo htmlspecialchars($fuente_unica['entidad']); ?></div>
              </div>
            </div>
          <?php else: ?>
            <div style="width: 220px; height: 220px; border-radius: 50%; background: conic-gradient(
              <?php
              $angle = 0;
              $colors = ['#2563eb', '#10b981', '#f59e0b', '#0ea5e9'];
              $i = 0;
              foreach ($entidades_con_aporte as $f) {
                  $next_angle = $angle + ($f['porcentaje'] * 3.6);
                  echo $colors[$i % 4] . ' ' . $angle . 'deg ' . $next_angle . 'deg';
                  $angle = $next_angle;
                  $i++;
                  if ($i < count($entidades_con_aporte)) echo ', ';
              }
              ?>
            ); display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(37, 99, 235, 0.2);">
              <div style="width: 140px; height: 140px; background: white; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: inset 0 2px 8px rgba(15, 23, 42, 0.1);">
                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);"><?php echo $num_fuentes; ?></div>
                <div style="font-size: 0.7rem; color: var(--text-secondary); font-weight: 600; text-transform: uppercase; margin-top: 4px;">Fuentes</div>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="chart-legend">
          <?php
          $legend_colors = ['primary', 'success', 'warning', 'accent'];
          foreach ($financiamiento_filtrado as $i => $f):
          ?>
          <div class="legend-item">
            <div class="legend-color <?php echo $legend_colors[$i % 4]; ?>"></div>
            <div class="legend-info">
              <div class="legend-name"><?php echo htmlspecialchars($f['entidad']); ?></div>
              <div>
                <span class="legend-value">Q.<?php echo number_format($f['monto'], 2); ?></span>
                <span class="legend-percentage">(<?php echo $f['porcentaje']; ?>%)</span>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Distribución por Categoría -->
    <div class="category-distribution">
      <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 16px; color: var(--text-primary);">
        &#x1F4C8; Distribuci&oacute;n por Categor&iacute;a de Trabajo
      </h4>
      <?php foreach ($categorias_json as $cat): ?>
      <div class="category-item">
        <div class="category-header">
          <span class="category-name"><?php echo htmlspecialchars($cat['categoria']); ?></span>
          <span class="category-amount">Q.<?php echo number_format($cat['monto'], 2); ?></span>
          <span class="category-percentage"><?php echo $cat['porcentaje']; ?>%</span>
        </div>
        <div class="category-bar">
          <div class="category-bar-fill" style="width: 0%" data-width="<?php echo $cat['barra_porcentaje']; ?>%" data-real-percentage="<?php echo $cat['porcentaje']; ?>%"></div>
        </div>
      </div>
      <?php endforeach; ?>
      <div style="margin-top: 12px; padding: 12px; background: #f1f5f9; border-radius: 8px; font-size: 0.8rem; color: var(--text-secondary);">
        &#x1F4A1; <strong>Nota:</strong> Las barras son proporcionales entre categor&iacute;as para comparaci&oacute;n visual. Los porcentajes mostrados representan el % real del presupuesto total del proyecto.
      </div>
    </div>
  </section>

  <!-- RENGLONES CON PAGINACIÓN -->
  <?php if (!empty($renglones)): ?>
  <section id="renglones" class="card">
    <div class="section-header">
      <span class="section-icon">&#x1F4CB;</span>
      <h3 class="section-title">Renglones del Proyecto</h3>
      <p class="section-subtitle">Click en cada rengl&oacute;n para ver detalles financieros &bull; Contrato <?php echo htmlspecialchars($numero_contrato); ?> &bull; <?php echo count($renglones_detallados); ?> renglones</p>
    </div>

    <div class="renglones-grid" id="renglonesGrid">
      <?php foreach ($renglones_detallados as $index => $rd): ?>
        <div class="renglon-item expandible renglon-row" data-renglon-index="<?php echo $index; ?>" style="<?php echo $index >= 40 ? 'display: none;' : ''; ?>">
          <div class="renglon-num"><?php echo $rd['renglon']; ?></div>
          <div class="renglon-text"><?php echo htmlspecialchars($rd['descripcion']); ?></div>
          <div class="renglon-cantidad">
            <?php echo htmlspecialchars($rd['cantidad']); ?> <?php echo htmlspecialchars($rd['unidad']); ?>
          </div>
        </div>

        <div class="renglon-details renglon-row" data-details-index="<?php echo $index; ?>" style="<?php echo $index >= 40 ? 'display: none;' : ''; ?>">
          <div class="renglon-details-inner">
            <div class="renglon-category-badge">
              &#x1F3F7;&#xFE0F; <?php echo htmlspecialchars($rd['categoria']); ?>
            </div>

            <div class="renglon-meta">
              <div class="renglon-meta-item">
                <div class="renglon-meta-label">Precio Unitario</div>
                <div class="renglon-meta-value"><?php echo htmlspecialchars($rd['precio_unitario']); ?></div>
              </div>

              <div class="renglon-meta-item">
                <div class="renglon-meta-label">Cantidad</div>
                <div class="renglon-meta-value">
                  <?php echo htmlspecialchars($rd['cantidad']); ?> <?php echo htmlspecialchars($rd['unidad']); ?>
                </div>
              </div>

              <div class="renglon-meta-item">
                <div class="renglon-meta-label">Subtotal</div>
                <div class="renglon-meta-value precio"><?php echo htmlspecialchars($rd['subtotal']); ?></div>
              </div>

              <div class="renglon-meta-item">
                <div class="renglon-meta-label">% del Presupuesto</div>
                <div class="renglon-meta-value">
                  <?php
                    $subtotal_num = parsearMonto($rd['subtotal']);
                    $porcentaje_renglon = ($monto_total_num > 0) ? ($subtotal_num / $monto_total_num) * 100 : 0;
                    echo number_format($porcentaje_renglon, 2);
                  ?>%
                </div>
              </div>
            </div>

            <div class="renglon-progress-bar">
              <div class="renglon-progress-fill"
                   style="width: 0%"
                   data-width="<?php echo number_format($porcentaje_renglon, 2); ?>%"></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (count($renglones_detallados) > 40): ?>
    <div class="renglones-pagination">
      <div class="renglones-showing">
        Mostrando <strong><span id="renglonesShowing">40</span></strong> de <strong><?php echo count($renglones_detallados); ?></strong> renglones
      </div>
      <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
        <button class="btn btn-primary btn-load-renglones" id="btnLoadRenglones">
          Cargar 40 m&aacute;s &darr;
        </button>
        <button class="btn btn-primary" id="btnShowAllRenglones" style="background: linear-gradient(135deg, var(--success), #059669);">
          Mostrar todos los renglones
        </button>
      </div>
    </div>
    <?php endif; ?>
  </section>
  <?php endif; ?>

  <!-- INFORMACIÓN -->
  <section id="info" class="card">
    <div class="section-header">
      <span class="section-icon">&#x1F4C4;</span>
      <h3 class="section-title">Informaci&oacute;n del Contrato</h3>
      <p class="section-subtitle">Detalles oficiales seg&uacute;n contrato <?php echo htmlspecialchars($numero_contrato); ?></p>
    </div>

    <div class="info-grid">
      <div class="info-item">
        <div class="info-label">N&uacute;mero de Contrato</div>
        <div class="info-value"><?php echo htmlspecialchars($numero_contrato); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">NOG</div>
        <div class="info-value"><?php echo htmlspecialchars($nog); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Contratista</div>
        <div class="info-value"><?php echo htmlspecialchars($contratista); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Empresa</div>
        <div class="info-value"><?php echo htmlspecialchars($empresa); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Monto Adjudicado</div>
        <div class="info-value"><?php echo htmlspecialchars($monto); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Plazo de Ejecuci&oacute;n</div>
        <div class="info-value"><?php echo htmlspecialchars($plazo); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Fecha de Firma</div>
        <div class="info-value"><?php echo date('d/m/Y', strtotime($fecha_firma)); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Fecha Estimada T&eacute;rmino</div>
        <div class="info-value"><?php echo date('d/m/Y', strtotime($fecha_fin)); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Entidad Contratante</div>
        <div class="info-value"><?php echo htmlspecialchars($entidad); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Ubicaci&oacute;n</div>
        <div class="info-value"><?php echo htmlspecialchars($ubicacion); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Estado del Proyecto</div>
        <div class="info-value"><?php echo htmlspecialchars($estatus); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Descripci&oacute;n</div>
        <div class="info-value"><?php echo htmlspecialchars($descripcion); ?></div>
      </div>
    </div>
  </section>

</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="footer-col">
        <h4 class="footer-title">Proyecto NOG <?php echo htmlspecialchars($nog); ?></h4>
        <p class="footer-text">
          Sistema de seguimiento y transparencia para proyectos de infraestructura p&uacute;blica.<br>
          <strong><?php echo htmlspecialchars($entidad); ?></strong>
        </p>
      </div>

      <div class="footer-col">
        <h4 class="footer-title">Informaci&oacute;n del Proyecto</h4>
        <p class="footer-text">
          &#x1F4CB; Contrato: <?php echo htmlspecialchars($numero_contrato); ?><br>
          &#x1F477; <?php echo htmlspecialchars($empresa); ?><br>
          &#x1F4B0; <?php echo htmlspecialchars($monto); ?>
        </p>
      </div>

      <div class="footer-col footer-dev">
        <h4 class="footer-title">Desarrollo Web</h4>
        <p class="footer-text">
          <strong>Elvis Saul Ar&eacute;valo Garc&iacute;a</strong><br>
          Ing. en Sistemas y Computaci&oacute;n<br>
          &#x1F4E7; <a href="mailto:elvis@tecnosis.org" style="color: rgba(255, 255, 255, 0.8);">elvis@tecnosis.org</a><br>
          <span style="font-size: 1.1rem;">&#x1F4AC;</span> <a href="https://wa.me/50240126957" target="_blank" rel="noopener" style="color: rgba(255, 255, 255, 0.8);">+502 4012-6957</a><br>
          &#x1F310; <a href="https://tecnosis.org/" target="_blank" rel="noopener" style="color: rgba(255, 255, 255, 0.8);">tecnosis.org</a>
        </p>
        <div class="dev-badge">
          <span style="font-size: 1.2rem;">&#x1F4BB;</span>
          <span style="font-size: 0.85rem; font-weight: 600;">Desarrollo Profesional</span>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      &copy; 2025 Proyecto NOG <?php echo htmlspecialchars($nog); ?>. Informaci&oacute;n de car&aacute;cter p&uacute;blico.
      | Desarrollado por <a href="https://tecnosis.org/" target="_blank" rel="noopener" style="color: rgba(255, 255, 255, 0.8); text-decoration: underline;">Elvis Ar&eacute;valo - Tecnosis</a>
    </div>
  </div>
</footer>

<!-- LIGHTBOX -->
<div id="lightbox" class="lightbox">
  <button class="lightbox-close" type="button" aria-label="Cerrar">&times;</button>
  <div class="lightbox-content">
    <img id="lightboxImage" class="lightbox-image" src="" alt="Imagen ampliada">
    <div class="lightbox-thumbs" id="lightboxThumbs"></div>
  </div>
  <div class="lightbox-controls">
    <button class="lightbox-btn" id="btnPrev" aria-label="Anterior">&lsaquo;</button>
    <button class="lightbox-btn" id="btnNext" aria-label="Siguiente">&rsaquo;</button>
  </div>
  <div class="lightbox-info" id="lightboxInfo"></div>
</div>

<!-- SCROLL TO TOP -->
<button class="scroll-top" id="scrollTop" aria-label="Volver arriba">&uarr;</button>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
  var galerias = <?php echo json_encode($lightboxData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
  var totalRenglones = <?php echo count($renglones_detallados); ?>;

  // LIGHTBOX
  var lightbox = document.getElementById('lightbox');
  var lightboxImg = document.getElementById('lightboxImage');
  var lightboxInfo = document.getElementById('lightboxInfo');
  var lightboxThumbs = document.getElementById('lightboxThumbs');
  var btnClose = document.querySelector('.lightbox-close');
  var btnPrev = document.getElementById('btnPrev');
  var btnNext = document.getElementById('btnNext');
  var scrollTopBtn = document.getElementById('scrollTop');

  var currentGallery = 0;
  var currentIndex = 0;

  function updateLightboxThumbs() {
    if (!galerias[currentGallery]) return;
    lightboxThumbs.innerHTML = '';
    galerias[currentGallery].forEach(function(url, idx) {
      var thumbDiv = document.createElement('div');
      thumbDiv.className = 'lightbox-thumb' + (idx === currentIndex ? ' active' : '');
      thumbDiv.onclick = function() {
        currentIndex = idx;
        updateLightboxImage();
      };
      var thumbImg = document.createElement('img');
      thumbImg.src = url;
      thumbImg.alt = 'Miniatura ' + (idx + 1);
      thumbDiv.appendChild(thumbImg);
      lightboxThumbs.appendChild(thumbDiv);
    });
    var activeThumb = lightboxThumbs.querySelector('.lightbox-thumb.active');
    if (activeThumb) {
      activeThumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    }
  }

  function updateLightboxImage() {
    if (!galerias[currentGallery] || !galerias[currentGallery][currentIndex]) return;
    lightboxImg.src = galerias[currentGallery][currentIndex];
    lightboxInfo.textContent = 'Imagen ' + (currentIndex + 1) + ' de ' + galerias[currentGallery].length;
    document.querySelectorAll('.lightbox-thumb').forEach(function(thumb, idx) {
      thumb.classList.toggle('active', idx === currentIndex);
    });
    var activeThumb = lightboxThumbs.querySelector('.lightbox-thumb.active');
    if (activeThumb) {
      activeThumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    }
  }

  function openLightbox(galleryIndex, imageIndex) {
    if (!galerias[galleryIndex] || !galerias[galleryIndex][imageIndex]) return;
    currentGallery = galleryIndex;
    currentIndex = imageIndex;
    updateLightboxThumbs();
    updateLightboxImage();
    lightbox.classList.add('abierto');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    lightbox.classList.remove('abierto');
    document.body.style.overflow = '';
    setTimeout(function() {
      lightboxImg.src = '';
      lightboxThumbs.innerHTML = '';
    }, 300);
  }

  function nextImage() {
    if (!galerias[currentGallery]) return;
    currentIndex = (currentIndex + 1) % galerias[currentGallery].length;
    updateLightboxImage();
  }

  function prevImage() {
    if (!galerias[currentGallery]) return;
    currentIndex = (currentIndex - 1 + galerias[currentGallery].length) % galerias[currentGallery].length;
    updateLightboxImage();
  }

  document.addEventListener('click', function(e) {
    var trigger = e.target.closest('[data-galeria]');
    if (trigger) {
      e.preventDefault();
      var gIndex = parseInt(trigger.getAttribute('data-galeria'), 10);
      var iIndex = parseInt(trigger.getAttribute('data-index'), 10) || 0;
      openLightbox(gIndex, iIndex);
    }
  });

  btnClose.addEventListener('click', closeLightbox);
  btnNext.addEventListener('click', nextImage);
  btnPrev.addEventListener('click', prevImage);
  lightbox.addEventListener('click', function(e) {
    if (e.target === lightbox) closeLightbox();
  });

  document.addEventListener('keydown', function(e) {
    if (!lightbox.classList.contains('abierto')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowRight') nextImage();
    if (e.key === 'ArrowLeft') prevImage();
  });

  // SCROLL TO TOP
  window.addEventListener('scroll', function() {
    scrollTopBtn.classList.toggle('visible', window.pageYOffset > 300);
  });

  scrollTopBtn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // TIMELINE - Click en puntos
  document.querySelectorAll('.timeline-point[data-galeria]').forEach(function(point) {
    point.addEventListener('click', function() {
      var gIndex = parseInt(this.getAttribute('data-galeria'), 10);
      var items = document.querySelectorAll('.galeria-item');
      var target = items[gIndex];
      if (target) {
        target.style.display = 'block';
        target.scrollIntoView({ behavior: 'smooth', block: 'center' });
        setTimeout(function() {
          var card = target.querySelector('.galeria-card');
          if (card) {
            card.style.animation = 'pulse 0.5s';
            setTimeout(function() { card.style.animation = ''; }, 500);
          }
        }, 300);
      }
    });
  });

  // MAPA
  var map = L.map('map').setView([<?php echo $lat; ?>, <?php echo $lng; ?>], 16);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors',
    maxZoom: 19
  }).addTo(map);

  var marker = L.marker([<?php echo $lat; ?>, <?php echo $lng; ?>]).addTo(map);
  marker.bindPopup('<strong>Proyecto NOG <?php echo htmlspecialchars($nog); ?></strong><br><?php echo htmlspecialchars($ubicacion); ?>').openPopup();

  // PAGINACIÓN DE GALERÍAS
  var totalGalerias = <?php echo $total_publicaciones; ?>;
  var btnLoadMore = document.getElementById('btnLoadMore');
  var filterSelect = document.getElementById('filterSelect');
  var countShowing = document.getElementById('countShowing');
  var loadMoreContainer = document.getElementById('loadMoreContainer');

  function updateVisibleCount() {
    var items = document.querySelectorAll('.galeria-item');
    var visible = 0;
    items.forEach(function(item) {
      if (item.style.display !== 'none') visible++;
    });
    if (countShowing) countShowing.textContent = visible;
    if (loadMoreContainer) {
      loadMoreContainer.style.display = visible >= totalGalerias ? 'none' : 'block';
    }
  }

  function filterGalerias(filterType) {
    var items = document.querySelectorAll('.galeria-item');
    var now = new Date();

    items.forEach(function(item, index) {
      var shouldShow = false;
      var dateStr = item.dataset.date;

      if (!dateStr) {
        shouldShow = filterType === 'all' || (filterType === '10' && index < 10);
      } else {
        var itemDate = new Date(dateStr);
        switch(filterType) {
          case '10':
            shouldShow = index < 10;
            break;
          case 'last-month':
            var oneMonthAgo = new Date(now);
            oneMonthAgo.setMonth(now.getMonth() - 1);
            shouldShow = itemDate >= oneMonthAgo;
            break;
          case 'last-3-months':
            var threeMonthsAgo = new Date(now);
            threeMonthsAgo.setMonth(now.getMonth() - 3);
            shouldShow = itemDate >= threeMonthsAgo;
            break;
          case 'last-6-months':
            var sixMonthsAgo = new Date(now);
            sixMonthsAgo.setMonth(now.getMonth() - 6);
            shouldShow = itemDate >= sixMonthsAgo;
            break;
          case 'year-2025':
            shouldShow = itemDate.getFullYear() === 2025;
            break;
          case 'year-2024':
            shouldShow = itemDate.getFullYear() === 2024;
            break;
          case 'all':
            shouldShow = true;
            break;
        }
      }
      item.style.display = shouldShow ? 'block' : 'none';
    });
    updateVisibleCount();
  }

  if (btnLoadMore) {
    btnLoadMore.addEventListener('click', function() {
      var items = document.querySelectorAll('.galeria-item');
      var shown = 0;
      items.forEach(function(item) {
        if (item.style.display === 'none' && shown < 10) {
          item.style.display = 'block';
          shown++;
        }
      });
      updateVisibleCount();
    });
  }

  if (filterSelect) {
    filterSelect.addEventListener('change', function() {
      filterGalerias(this.value);
    });
  }

  // RENGLONES EXPANDIBLES
  document.querySelectorAll('.renglon-item.expandible').forEach(function(item) {
    item.addEventListener('click', function() {
      var index = this.dataset.renglonIndex;
      var details = document.querySelector('[data-details-index="' + index + '"]');
      this.classList.toggle('expanded');
      if (this.classList.contains('expanded')) {
        setTimeout(function() {
          var progressBar = details.querySelector('.renglon-progress-fill');
          if (progressBar) progressBar.style.width = progressBar.dataset.width;
        }, 100);
      }
    });
  });

  // PAGINACIÓN DE RENGLONES
  var btnLoadRenglones = document.getElementById('btnLoadRenglones');
  var btnShowAllRenglones = document.getElementById('btnShowAllRenglones');
  var renglonesShowing = document.getElementById('renglonesShowing');

  if (btnLoadRenglones) {
    btnLoadRenglones.addEventListener('click', function() {
      var allRows = document.querySelectorAll('.renglon-row');
      var shown = 0;
      allRows.forEach(function(row) {
        if (row.style.display === 'none' && shown < 80) {
          row.style.display = '';
          shown++;
        }
      });
      var visibleCount = 0;
      allRows.forEach(function(row) {
        if (row.style.display !== 'none' && row.classList.contains('expandible')) visibleCount++;
      });
      if (renglonesShowing) renglonesShowing.textContent = visibleCount;
      if (visibleCount >= totalRenglones) {
        btnLoadRenglones.parentElement.parentElement.style.display = 'none';
      }
    });
  }

  if (btnShowAllRenglones) {
    btnShowAllRenglones.addEventListener('click', function() {
      document.querySelectorAll('.renglon-row').forEach(function(row) {
        row.style.display = '';
      });
      if (renglonesShowing) renglonesShowing.textContent = totalRenglones;
      this.parentElement.parentElement.style.display = 'none';
    });
  }

  // ANIMACIÓN DE BARRAS
  window.addEventListener('load', function() {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var fills = entry.target.querySelectorAll('.category-bar-fill');
          fills.forEach(function(fill) {
            setTimeout(function() {
              fill.style.width = fill.dataset.width;
            }, 100);
          });
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    var categorySection = document.querySelector('.category-distribution');
    if (categorySection) observer.observe(categorySection);
  });

  // MENÚ MÓVIL
  var navbarInner = document.querySelector('.navbar-inner');
  var navLinks = document.querySelector('.nav-links');
  var menuToggle = document.createElement('button');
  menuToggle.className = 'mobile-menu-toggle';
  menuToggle.setAttribute('aria-label', 'Toggle menu');
  menuToggle.innerHTML = '<span></span><span></span><span></span>';
  var navBadge = document.querySelector('.nav-badge');
  navbarInner.insertBefore(menuToggle, navBadge);

  menuToggle.addEventListener('click', function() {
    this.classList.toggle('active');
    navLinks.classList.toggle('mobile-open');
  });

  navLinks.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      menuToggle.classList.remove('active');
      navLinks.classList.remove('mobile-open');
    });
  });

  // SMOOTH SCROLL
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        var navHeight = document.querySelector('.navbar').offsetHeight;
        var targetPosition = target.offsetTop - navHeight - 20;
        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
      }
    });
  });

  updateVisibleCount();

  // Animación de timeline
  setTimeout(function() {
    var progressBar = document.querySelector('.timeline-progress');
    if (progressBar) progressBar.style.width = '<?php echo $porcentaje_tiempo; ?>%';
  }, 300);
</script>

</body>
</html>
