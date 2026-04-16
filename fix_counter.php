<?php
$base = "/home/u925954286/domains/";
$dirs = glob($base . "nog*.licitacionesgt.com/public_html/default.php");

$fixed = 0;
$skipped = 0;

foreach ($dirs as $file) {
    preg_match('/nog\d+/', $file, $m);
    $site = $m[0] ?? basename(dirname(dirname($file)));

    $content = file_get_contents($file);

    // Bug 1: countShowing hardcoded a 10
    $old = 'id="countShowing">10</span>';
    $new = 'id="countShowing"><?php echo min(10, $total_publicaciones); ?></span>';

    if (strpos($content, $old) === false) {
        echo "SKIP: $site - ya corregido\n";
        $skipped++;
        continue;
    }

    $content = str_replace($old, $new, $content);

    // Bug 2: Boton "Cargar 10 mas" visible cuando no hay mas de 10
    // Ya se maneja por JS con updateVisibleCount(), pero asegurar que
    // loadMoreContainer inicie oculto si hay <= 10 galerias
    // Buscar el loadMoreContainer y agregar condicion PHP
    $oldLoadMore = '<div class="load-more-container" id="loadMoreContainer">';
    $newLoadMore = '<div class="load-more-container" id="loadMoreContainer" style="<?php echo $total_publicaciones <= 10 ? \'display:none;\' : \'\'; ?>">';

    if (strpos($content, $oldLoadMore) !== false && strpos($content, 'total_publicaciones <= 10') === false) {
        $content = str_replace($oldLoadMore, $newLoadMore, $content);
    }

    file_put_contents($file, $content);
    $fixed++;
    echo "FIXED: $site\n";
}

echo "\nResumen: $fixed corregidos, $skipped ya estaban OK.\n";
?>
