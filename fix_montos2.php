<?php
$sites = ["nog28184513", "nog27699706", "nog27705560", "nog28007085", "nog27830772"];
$base = "/home/u925954286/domains/";

$bugPattern = "(float) str_replace(['Q', '.', ','], '',";

foreach ($sites as $site) {
    $file = $base . $site . ".licitacionesgt.com/public_html/default.php";
    if (!file_exists($file)) {
        echo "SKIP: $site - no encontrado\n";
        continue;
    }

    $content = file_get_contents($file);
    $bugsBefore = substr_count($content, $bugPattern);

    // Reemplazar TODAS las ocurrencias del patron buggy
    $content = preg_replace(
        '/\(float\)\s*str_replace\(\[\'Q\',\s*\'\.\',\s*\',\'\],\s*\'\',\s*(.+?)\)/',
        'parsearMonto($1)',
        $content
    );

    file_put_contents($file, $content);

    $newContent = file_get_contents($file);
    $bugsAfter = substr_count($newContent, $bugPattern);
    echo "$site: bugs $bugsBefore -> $bugsAfter\n";
}
echo "Listo.\n";
?>
