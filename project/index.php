<?php
spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/src/';

    if (str_starts_with($class, $prefix)) {
        $relative = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});

use App\Book;
use App\Electronics;
use App\Product;

$catalog = [
    new Book('Война и мир', 800),
    new Book('1984', 450),
    new Book('Чистый код', 1200),
    new Electronics('Смартфон', 35000, 5),
    new Electronics('Ноутбук', 75000, 10),
    new Electronics('Наушники', 8000, 3),
];

$total = 0;
foreach ($catalog as $item) {
    echo $item->getInfo() . "\n";
    $total += $item->getFinalPrice();
}

echo "Сумма конечных цен каталога: $total руб.\n";
echo "Всего создано товаров: " . Product::getCount() . "\n";