<?php
// ========================= 
// CONFIGURACIÓN DEL PROYECTO (PARAMETRIZABLE) 
// ========================= 

// Identificación del proceso
$nog = '044-2026'; 
$contrato = '13-2025'; 

// Textos principales del proyecto
$descripcion = 'AMPLIACION SISTEMA DE AGUA POTABLE CASERÍO CACABAL SEGUNDO CENTRO, CHINIQUE, QUICHE'; 
$titulo_hero = 'Ampliación Sistema de Agua Potable - Caserío Cacabal Segundo Centro'; 

// Contratista y empresa
$contratista = 'SAMUEL PORFIRIO OCHOA DE LEÓN'; 
$empresa = 'CONSTRUCTORA OCHOA LOPEZ'; 

// Monto y plazo
$monto = 'Q. 1,900,000.00'; 
$plazo = '6 MESES'; 

// Fechas 
$fecha_firma = '2025-06-13'; 
$fecha_inicio = '2025-06-14'; 
$fecha_fin = '2025-12-14'; 

// Estado visible (badge)
$estatus = 'En Proceso'; 

// Entidad y ámbito territorial
$entidad = 'MUNICIPALIDAD DE CHINIQUE'; 
$municipio = 'Chinique'; 
$departamento = 'Quiché'; 

// Autoridades visibles
$alcalde = 'CAMILO TAMUP TINIGUAR'; 

// Ubicación 
$ubicacion = 'Caserío Cacabal Segundo Centro, Chinique, Quiché'; 

// Coordenadas aproximadas (ajustar con coordenadas exactas)
$lat = 15.4205; // Coordenadas aproximadas de Chinique
$lng = -90.8541; 

// ========================= 
// RENGLONES DEL CONTRATO 
// ========================= 
$renglones = [
    ['num'=>1, 'nombre'=>'PRELIMINARES', 'unidad'=>'UNIDAD', 'cantidad'=>'1.00', 'precio_unitario'=>'22,800.00'],
    ['num'=>2, 'nombre'=>'LINEA DE DISTRIBUCIÓN', 'unidad'=>'ML', 'cantidad'=>'9,580.00', 'precio_unitario'=>'36.25'],
    ['num'=>3, 'nombre'=>'CAJA ROMPE PRESION DE 1 M³', 'unidad'=>'UNIDAD', 'cantidad'=>'2.00', 'precio_unitario'=>'9,526.00'],
    ['num'=>4, 'nombre'=>'CAJA DE VALVULA DE COMPUERTA', 'unidad'=>'UNIDAD', 'cantidad'=>'3.00', 'precio_unitario'=>'5,978.90'],
    ['num'=>5, 'nombre'=>'PASO DE ZANJON', 'unidad'=>'UNIDAD', 'cantidad'=>'1.00', 'precio_unitario'=>'5,958.00'],
    ['num'=>6, 'nombre'=>'PASO AEREO DE 12M', 'unidad'=>'UNIDAD', 'cantidad'=>'3.00', 'precio_unitario'=>'29,229.00'],
    ['num'=>7, 'nombre'=>'TANQUE DE DISTRIBUCIÓN 100 M³ (T.D.)', 'unidad'=>'M²', 'cantidad'=>'72.50', 'precio_unitario'=>'6,091.00'],
    ['num'=>8, 'nombre'=>'SISTEMA DE CLORACIÓN', 'unidad'=>'UNIDAD', 'cantidad'=>'1.00', 'precio_unitario'=>'25,999.80'],
    ['num'=>9, 'nombre'=>'EQUIPO DE BOMBEO MAS PANEL SOLAR', 'unidad'=>'UNIDAD', 'cantidad'=>'1.00', 'precio_unitario'=>'598,844.00'],
    ['num'=>10, 'nombre'=>'CONEXIÓN DOMICILIAR', 'unidad'=>'UNIDAD', 'cantidad'=>'150.00', 'precio_unitario'=>'2,219.00']
];
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

    .section-header {
      margin-bottom: 28px;
    }

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
    .timeline-container {
      position: relative;
      padding: 40px 0;
    }

    .timeline-bar-wrapper {
      position: relative;
      height: 80px;
      margin: 20px 0;
    }

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
      0%, 100% {
        box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7);
      }
      50% {
        box-shadow: 0 0 0 10px rgba(37, 99, 235, 0);
      }
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

    .timeline-point:hover .timeline-tooltip {
      opacity: 1;
    }

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

    .gallery-info {
      font-size: 0.95rem;
      color: var(--text-secondary);
    }

    .gallery-filter {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .gallery-filter label {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--text-primary);
    }

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

    .filter-select:hover {
      border-color: var(--primary);
    }

    .filter-select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .load-more-container {
      text-align: center;
      margin: 40px 0;
    }

    .btn-load-more {
      min-width: 200px;
    }

    /* TIMELINE VERTICAL GALERÍAS */
    .timeline-galerias {
      position: relative;
      padding: 40px 0;
    }

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

    .timeline-galeria-item {
      position: relative;
      margin-bottom: 60px;
    }

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

    .galeria-card.card-left {
      margin-right: calc(50% + 40px);
    }

    .galeria-card.card-right {
      margin-left: calc(50% + 40px);
    }

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

    .galeria-card:hover .galeria-preview img {
      transform: scale(1.08);
    }

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

    .galeria-body {
      padding: 22px;
    }

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

    .galeria-title {
      font-size: 1.15rem;
      font-weight: 700;
      margin-bottom: 8px;
      color: var(--text-primary);
    }

    .galeria-desc {
      color: var(--text-secondary);
      font-size: 0.9rem;
      margin-bottom: 18px;
      line-height: 1.6;
    }

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

    .thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

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

    /* RENGLONES */
    .renglones-grid {
      display: grid;
      gap: 10px;
    }

    .renglon-item {
      display: grid;
      grid-template-columns: 40px 1fr auto;
      gap: 14px;
      align-items: center;
      padding: 14px 16px;
      background: #f8fafc;
      border-radius: 12px;
      border: 1px solid var(--border);
      transition: all 0.2s;
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

    .renglon-text {
      font-size: 0.9rem;
      color: var(--text-primary);
      font-weight: 500;
    }

    .renglon-cantidad {
      font-size: 0.85rem;
      color: var(--text-secondary);
      font-weight: 600;
      white-space: nowrap;
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

    .info-value {
      font-size: 0.95rem;
      color: var(--text-primary);
      font-weight: 600;
    }

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

    .lightbox.abierto {
      opacity: 1;
      visibility: visible;
    }

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

    .lightbox-thumbs::-webkit-scrollbar {
      height: 6px;
    }

    .lightbox-thumbs::-webkit-scrollbar-track {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 3px;
    }

    .lightbox-thumbs::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.3);
      border-radius: 3px;
    }

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

    .lightbox-thumb:hover {
      opacity: 1;
      transform: scale(1.05);
    }

    .lightbox-thumb.active {
      border-color: var(--primary);
      opacity: 1;
      box-shadow: 0 0 20px rgba(37, 99, 235, 0.6);
    }

    .lightbox-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

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

    .scroll-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .scroll-top:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(37, 99, 235, 0.5);
    }

    /* FOOTER */
    .footer {
      background: var(--bg-main);
      color: white;
      padding: 48px 24px 32px;
      margin-top: 60px;
    }

    .footer-inner {
      max-width: var(--max-width);
      margin: 0 auto;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
      margin-bottom: 40px;
    }

    .footer-title {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 16px;
      color: white;
    }

    .footer-text {
      color: rgba(255, 255, 255, 0.7);
      line-height: 1.8;
      font-size: 0.95rem;
    }

    .footer-text a {
      transition: color 0.2s;
    }

    .footer-text a:hover {
      color: white;
    }

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

    .empty-icon {
      font-size: 4rem;
      margin-bottom: 24px;
      opacity: 0.5;
    }

    .empty-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 12px;
    }

    .empty-text {
      color: var(--text-secondary);
      max-width: 500px;
      margin: 0 auto;
      line-height: 1.7;
    }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
      .galerias-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      }
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .hero {
        padding: 36px 20px 60px;
      }

      .hero-stats {
        grid-template-columns: repeat(2, 1fr);
      }

      .main {
        padding: 0 16px 60px;
      }

      .card {
        padding: 24px;
      }

      #map {
        height: 300px;
      }

      .timeline-bar-wrapper {
        height: 60px;
      }

      .timeline-galerias::before {
        display: none;
      }

      .galeria-card.card-left,
      .galeria-card.card-right {
        margin: 0;
      }

      .timeline-dot-vertical {
        left: 20px;
      }

      .timeline-galeria-item {
        padding-left: 50px;
      }

      .lightbox-image {
        max-height: 60vh;
      }

      .lightbox-thumbs {
        max-width: 95vw;
      }

      .lightbox-thumb {
        width: 60px;
        height: 60px;
      }

      .lightbox-close,
      .lightbox-btn {
        width: 44px;
        height: 44px;
      }

      .scroll-top {
        bottom: 24px;
        right: 24px;
        width: 48px;
        height: 48px;
      }

      .gallery-controls {
        flex-direction: column;
        align-items: stretch;
      }

      .gallery-info,
      .gallery-filter {
        width: 100%;
        justify-content: center;
      }

      .footer-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }

      .footer-dev {
        order: -1;
      }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="navbar-inner">
    <div class="brand">
      <div class="brand-icon">🏗️</div>
      <div class="brand-text">
        <h1>NOG <?php echo htmlspecialchars($nog); ?></h1>
        <p><?php echo htmlspecialchars($municipio); ?></p>
      </div>
    </div>
    <div class="nav-links">
      <a href="#timeline">Timeline</a>
      <a href="#ubicacion">Ubicación</a>
      <a href="#galerias">Galerías</a>
      <a href="#renglones">Renglones</a>
      <a href="#info">Información</a>
    </div>
    <div class="nav-badge">
      <span>●</span>
      <span><?php echo htmlspecialchars($estatus); ?></span>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">
    <div class="hero-badge">
      📋 Contrato <?php echo htmlspecialchars($contrato); ?>
    </div>
    
    <div class="hero-content">
      <h2 class="hero-title"><?php echo htmlspecialchars($titulo_hero); ?></h2>
      <p class="hero-subtitle"><?php echo htmlspecialchars($ubicacion); ?></p>
      
      <div class="hero-meta">
        <span class="hero-meta-item">
          👷 <strong><?php echo htmlspecialchars($empresa); ?></strong>
        </span>
        <span class="hero-meta-item">
          💰 <strong><?php echo htmlspecialchars($monto); ?></strong>
        </span>
        <span class="hero-meta-item">
          ⏱️ <strong><?php echo htmlspecialchars($plazo); ?></strong>
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
        <span class="stat-label">Fotografías</span>
      </div>
      <div class="stat-box">
        <span class="stat-value"><?php echo $dias_transcurridos; ?></span>
        <span class="stat-label">Días transcurridos</span>
      </div>
      <div class="stat-box">
        <span class="stat-value"><?php echo $porcentaje_tiempo; ?>%</span>
        <span class="stat-label">Tiempo del proyecto</span>
      </div>
      <?php if ($ultima_actualizacion !== null): ?>
      <div class="stat-box">
        <span class="stat-value"><?php echo $ultima_actualizacion; ?>d</span>
        <span class="stat-label">Última actualización</span>
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
      <span class="section-icon">📊</span>
      <h3 class="section-title">Línea de Tiempo del Proyecto</h3>
      <p class="section-subtitle">Visualización del progreso y publicaciones realizadas</p>
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
        <span>Hoy (Día <?php echo $dias_transcurridos; ?> de <?php echo $dias_totales; ?>)</span>
        <span><?php echo date('d/m/Y', strtotime($fecha_fin)); ?></span>
      </div>

      <div class="timeline-info">
        ⏱️ <strong>Plazo contractual:</strong> <?php echo htmlspecialchars($plazo); ?> desde el <?php echo date('d/m/Y', strtotime($fecha_inicio)); ?>.
        Fecha estimada de terminación: <strong><?php echo date('d/m/Y', strtotime($fecha_fin)); ?></strong>
      </div>
    </div>
  </section>

  <!-- MAPA -->
  <section id="ubicacion" class="card">
    <div class="section-header">
      <span class="section-icon">📍</span>
      <h3 class="section-title">Ubicación del Proyecto</h3>
      <p class="section-subtitle"><?php echo htmlspecialchars($ubicacion); ?></p>
    </div>
    
    <div id="map"></div>
    
    <div class="map-disclaimer">
      ⚠️ <strong>Nota:</strong> La ubicación mostrada es aproximada. El proyecto se ejecuta en <?php echo htmlspecialchars($ubicacion); ?>.
    </div>
  </section>

  <!-- GALERÍAS CON PAGINACIÓN -->
  <section id="galerias">
    <div class="card" style="padding-bottom: 16px;">
      <div class="section-header">
        <span class="section-icon">📸</span>
        <h3 class="section-title">Galería de Avances</h3>
        <p class="section-subtitle">Documentación fotográfica del progreso de la obra</p>
      </div>

      <?php if (!empty($galerias)): ?>
      <div class="gallery-controls">
        <div class="gallery-info">
          Mostrando <strong><span id="countShowing"><?php echo min(10, $total_publicaciones); ?></span></strong> de <strong><?php echo $total_publicaciones; ?></strong> publicaciones
        </div>
        <div class="gallery-filter">
          <label for="filterSelect">📅 Filtrar:</label>
          <select id="filterSelect" class="filter-select">
            <option value="10">Últimas 10</option>
            <option value="last-month">Último mes</option>
            <option value="last-3-months">Últimos 3 meses</option>
            <option value="last-6-months">Últimos 6 meses</option>
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
                  📷 <?php echo $total; ?>
                </span>
              </div>
              
              <div class="galeria-body">
                <span class="galeria-date">
                  📅 <?php echo htmlspecialchars($gal['fecha']); ?>
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
                  Ver galería completa →
                </button>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="load-more-container" id="loadMoreContainer" style="<?php echo $total_publicaciones <= 10 ? 'display:none;' : ''; ?>">
        <button class="btn btn-primary btn-load-more" id="btnLoadMore">
          Cargar 10 más ↓
        </button>
      </div>
    <?php else: ?>
      <div class="empty-state">
        <div class="empty-icon">📷</div>
        <h4 class="empty-title">Aún no hay reportes publicados</h4>
        <p class="empty-text">
          Los reportes fotográficos se publicarán aquí regularmente. 
          Para agregar reportes, cree carpetas con formato de fecha (ej: <code>2025-11-09</code>) dentro de <code>/imagenes</code>.
        </p>
      </div>
    <?php endif; ?>
  </section>

      <!-- RENGLONES -->
    <?php if (!empty($renglones)): ?>
    <section id="renglones" class="card">
      <div class="section-header">
        <span class="section-icon">📋</span>
        <h3 class="section-title">Renglones del Proyecto</h3>
        <p class="section-subtitle">Actividades según contrato <?php echo htmlspecialchars($contrato); ?></p>
      </div>
    
      <div class="renglones-grid">
        <?php foreach ($renglones as $renglon): ?>
          <div class="renglon-item">
            <div class="renglon-num"><?php echo $renglon['num']; ?></div>
            <div class="renglon-text"><?php echo htmlspecialchars($renglon['nombre']); ?></div>
            <div class="renglon-cantidad">
              <?php echo htmlspecialchars($renglon['cantidad']); ?> <?php echo htmlspecialchars($renglon['unidad']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endif; ?>


  <!-- INFORMACIÓN -->
  <section id="info" class="card">
    <div class="section-header">
      <span class="section-icon">📄</span>
      <h3 class="section-title">Información del Contrato</h3>
      <p class="section-subtitle">Detalles oficiales según contrato <?php echo htmlspecialchars($contrato); ?></p>
    </div>

    <div class="info-grid">
      <div class="info-item">
        <div class="info-label">Número de Contrato</div>
        <div class="info-value"><?php echo htmlspecialchars($contrato); ?></div>
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
        <div class="info-label">Plazo de Ejecución</div>
        <div class="info-value"><?php echo htmlspecialchars($plazo); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Fecha de Firma</div>
        <div class="info-value"><?php echo date('d/m/Y', strtotime($fecha_firma)); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Fecha Estimada Término</div>
        <div class="info-value"><?php echo date('d/m/Y', strtotime($fecha_fin)); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Entidad Contratante</div>
        <div class="info-value"><?php echo htmlspecialchars($entidad); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Ubicación</div>
        <div class="info-value"><?php echo htmlspecialchars($ubicacion); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Estado del Proyecto</div>
        <div class="info-value"><?php echo htmlspecialchars($estatus); ?></div>
      </div>
      <div class="info-item">
        <div class="info-label">Descripción</div>
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
          Sistema de seguimiento y transparencia para proyectos de infraestructura pública.<br>
          <strong><?php echo htmlspecialchars($entidad); ?></strong>
        </p>
      </div>
      
      <div class="footer-col">
        <h4 class="footer-title">Información del Proyecto</h4>
        <p class="footer-text">
          📋 Contrato: <?php echo htmlspecialchars($contrato); ?><br>
          👷 <?php echo htmlspecialchars($empresa); ?><br>
          💰 <?php echo htmlspecialchars($monto); ?>
        </p>
      </div>
      
      <div class="footer-col footer-dev">
        <h4 class="footer-title">Desarrollo Web</h4>
        <p class="footer-text">
          <strong>Elvis Saul Arévalo García</strong><br>
          Ing. en Sistemas y Computación<br>
          📧 <a href="mailto:elvis@tecnosis.org" style="color: rgba(255, 255, 255, 0.8);">elvis@tecnosis.org</a><br>
          <span style="font-size: 1.1rem;">💬</span> <a href="https://wa.me/50240126957" target="_blank" rel="noopener" style="color: rgba(255, 255, 255, 0.8);">+502 4012-6957</a><br>
          🌐 <a href="https://tecnosis.org/" target="_blank" rel="noopener" style="color: rgba(255, 255, 255, 0.8);">tecnosis.org</a>
        </p>
        <div class="dev-badge">
          <span style="font-size: 1.2rem;">💻</span>
          <span style="font-size: 0.85rem; font-weight: 600;">Desarrollo Profesional</span>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      © 2025 Proyecto NOG <?php echo htmlspecialchars($nog); ?>. Información de carácter público. 
      | Desarrollado por <a href="https://tecnosis.org/" target="_blank" rel="noopener" style="color: rgba(255, 255, 255, 0.8); text-decoration: underline;">Elvis Arévalo - Tecnosis</a>
    </div>
  </div>
</footer>

<!-- LIGHTBOX -->
<div id="lightbox" class="lightbox">
  <button class="lightbox-close" type="button" aria-label="Cerrar">×</button>
  <div class="lightbox-content">
    <img id="lightboxImage" class="lightbox-image" src="" alt="Imagen ampliada">
    <div class="lightbox-thumbs" id="lightboxThumbs"></div>
  </div>
  <div class="lightbox-controls">
    <button class="lightbox-btn" id="btnPrev" aria-label="Anterior">‹</button>
    <button class="lightbox-btn" id="btnNext" aria-label="Siguiente">›</button>
  </div>
  <div class="lightbox-info" id="lightboxInfo"></div>
</div>

<!-- SCROLL TO TOP -->
<button class="scroll-top" id="scrollTop" aria-label="Volver arriba">↑</button>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
  const galerias = <?php echo json_encode($lightboxData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;

  // LIGHTBOX
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImage');
  const lightboxInfo = document.getElementById('lightboxInfo');
  const lightboxThumbs = document.getElementById('lightboxThumbs');
  const btnClose = document.querySelector('.lightbox-close');
  const btnPrev = document.getElementById('btnPrev');
  const btnNext = document.getElementById('btnNext');
  const scrollTopBtn = document.getElementById('scrollTop');

  let currentGallery = 0;
  let currentIndex = 0;

  function updateLightboxThumbs() {
    if (!galerias[currentGallery]) return;
    
    lightboxThumbs.innerHTML = '';
    galerias[currentGallery].forEach((url, idx) => {
      const thumbDiv = document.createElement('div');
      thumbDiv.className = 'lightbox-thumb' + (idx === currentIndex ? ' active' : '');
      thumbDiv.onclick = () => {
        currentIndex = idx;
        updateLightboxImage();
      };
      
      const thumbImg = document.createElement('img');
      thumbImg.src = url;
      thumbImg.alt = `Miniatura ${idx + 1}`;
      thumbDiv.appendChild(thumbImg);
      
      lightboxThumbs.appendChild(thumbDiv);
    });

    const activeThumb = lightboxThumbs.querySelector('.lightbox-thumb.active');
    if (activeThumb) {
      activeThumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    }
  }

  function updateLightboxImage() {
    if (!galerias[currentGallery] || !galerias[currentGallery][currentIndex]) return;
    
    lightboxImg.src = galerias[currentGallery][currentIndex];
    lightboxInfo.textContent = `Imagen ${currentIndex + 1} de ${galerias[currentGallery].length}`;
    
    document.querySelectorAll('.lightbox-thumb').forEach((thumb, idx) => {
      thumb.classList.toggle('active', idx === currentIndex);
    });

    const activeThumb = lightboxThumbs.querySelector('.lightbox-thumb.active');
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
    setTimeout(() => { 
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
    const trigger = e.target.closest('[data-galeria]');
    if (trigger) {
      e.preventDefault();
      const gIndex = parseInt(trigger.getAttribute('data-galeria'), 10);
      const iIndex = parseInt(trigger.getAttribute('data-index'), 10) || 0;
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
  document.querySelectorAll('.timeline-point[data-galeria]').forEach(point => {
    point.addEventListener('click', function() {
      const gIndex = parseInt(this.getAttribute('data-galeria'), 10);
      const items = document.querySelectorAll('.galeria-item');
      const target = items[gIndex];
      if (target) {
        // Asegurarse de que esté visible
        target.style.display = 'block';
        target.scrollIntoView({ behavior: 'smooth', block: 'center' });
        setTimeout(() => {
          const card = target.querySelector('.galeria-card');
          if (card) {
            card.style.animation = 'pulse 0.5s';
            setTimeout(() => { card.style.animation = ''; }, 500);
          }
        }, 300);
      }
    });
  });

  // MAPA
  const map = L.map('map').setView([<?php echo $lat; ?>, <?php echo $lng; ?>], 16);
  
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
    maxZoom: 19
  }).addTo(map);

  const marker = L.marker([<?php echo $lat; ?>, <?php echo $lng; ?>]).addTo(map);
  marker.bindPopup('<strong>Proyecto NOG <?php echo htmlspecialchars($nog); ?></strong><br><?php echo htmlspecialchars($ubicacion); ?>').openPopup();

  // PAGINACIÓN Y FILTROS
  const totalGalerias = <?php echo $total_publicaciones; ?>;
  let currentVisible = 10;

  const btnLoadMore = document.getElementById('btnLoadMore');
  const filterSelect = document.getElementById('filterSelect');
  const countShowing = document.getElementById('countShowing');
  const loadMoreContainer = document.getElementById('loadMoreContainer');

  function updateVisibleCount() {
    const items = document.querySelectorAll('.galeria-item');
    let visible = 0;
    items.forEach(item => {
      if (item.style.display !== 'none') visible++;
    });
    
    if (countShowing) {
      countShowing.textContent = visible;
    }
    
    if (loadMoreContainer) {
      if (visible >= totalGalerias) {
        loadMoreContainer.style.display = 'none';
      } else {
        loadMoreContainer.style.display = 'block';
      }
    }
  }

  function filterGalerias(filterType) {
    const items = document.querySelectorAll('.galeria-item');
    const now = new Date();

    items.forEach((item, index) => {
      let shouldShow = false;
      const dateStr = item.dataset.date;
      
      if (!dateStr) {
        shouldShow = filterType === 'all' || (filterType === '10' && index < 10);
      } else {
        const itemDate = new Date(dateStr);

        switch(filterType) {
          case '10':
            shouldShow = index < 10;
            break;
          case 'last-month': {
            const oneMonthAgo = new Date(now);
            oneMonthAgo.setMonth(now.getMonth() - 1);
            shouldShow = itemDate >= oneMonthAgo;
            break;
          }
          case 'last-3-months': {
            const threeMonthsAgo = new Date(now);
            threeMonthsAgo.setMonth(now.getMonth() - 3);
            shouldShow = itemDate >= threeMonthsAgo;
            break;
          }
          case 'last-6-months': {
            const sixMonthsAgo = new Date(now);
            sixMonthsAgo.setMonth(now.getMonth() - 6);
            shouldShow = itemDate >= sixMonthsAgo;
            break;
          }
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
      const items = document.querySelectorAll('.galeria-item');
      let shown = 0;
      
      items.forEach((item) => {
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

  // Inicializar contador
  updateVisibleCount();

  // Animación de timeline progress
  window.addEventListener('load', function() {
    const progressBar = document.querySelector('.timeline-progress');
    if (progressBar) {
      setTimeout(() => {
        progressBar.style.width = '<?php echo $porcentaje_tiempo; ?>%';
      }, 300);
    }
  });
</script>

</body>
</html>