<?php
$sites = ["nog28184513", "nog27699706", "nog27705560", "nog28007085", "nog27830772"];
$base = "/home/u925954286/domains/";

$parsearMontoFunc = '
// FUNCION CORREGIDA: Parsear montos formato Q.1,999,925.00
function parsearMonto($monto_str) {
    $limpio = preg_replace(\'/^Q\\.?\\s*/\', \'\', $monto_str);
    $limpio = str_replace(\',\', \'\', $limpio);
    return (float) $limpio;
}
';

$bugPattern = "(float) str_replace(['Q', '.', ','], '',";

foreach ($sites as $site) {
    $file = $base . $site . ".licitacionesgt.com/public_html/default.php";
    if (!file_exists($file)) {
        echo "SKIP: $site - no encontrado\n";
        continue;
    }

    $content = file_get_contents($file);

    if (strpos($content, "function parsearMonto") !== false) {
        echo "SKIP: $site - ya tiene parsearMonto\n";
        continue;
    }

    // Backup
    copy($file, $file . ".bak." . date("Ymd"));

    // Contar bugs antes
    $bugsBefore = substr_count($content, $bugPattern);
    echo "$site: $bugsBefore bugs encontrados\n";

    // 1. Insertar funcion parsearMonto antes de la linea $monto_total_num
    $searchLine = '$monto_total_num = (float) str_replace([\'Q\', \'.\', \',\'], \'\', $monto_total);';
    $replaceLine = $parsearMontoFunc . "\n" . '$monto_total_num = parsearMonto($monto_total);';
    $content = str_replace($searchLine, $replaceLine, $content);

    // 2. Reemplazar TODAS las demas ocurrencias del patron buggy
    // Patron: (float) str_replace(['Q', '.', ','], '', $VARIABLE)
    $content = preg_replace(
        "/\(float\)\s*str_replace\(\['Q',\s*'\.',\s*','\],\s*'',\s*(.+?)\)/s",
        'parsearMonto($1)',
        $content
    );

    file_put_contents($file, $content);

    // Verificar
    $newContent = file_get_contents($file);
    $bugsAfter = substr_count($newContent, $bugPattern);
    $hasFn = strpos($newContent, "function parsearMonto") !== false;
    echo "DONE: $site - bugs: $bugsBefore -> $bugsAfter, parsearMonto: " . ($hasFn ? "SI" : "NO") . "\n";
}
echo "\nTodos los sitios procesados.\n";
?>
