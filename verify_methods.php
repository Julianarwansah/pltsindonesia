<?php

require __DIR__ . '/vendor/autoload.php';

$controller = new ReflectionClass(\App\Http\Controllers\ProdukController::class);
$methods = ['list', 'searchFrontend', 'terlaris', 'rekomendasi', 'detail'];
$missing = [];

foreach ($methods as $method) {
    if (!$controller->hasMethod($method)) {
        $missing[] = $method;
    }
}

if (empty($missing)) {
    echo "All methods exist.\n";
} else {
    echo "Missing methods: " . implode(', ', $missing) . "\n";
}
