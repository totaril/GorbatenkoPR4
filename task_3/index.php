<?php
spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Triangle(3, 4, 5),
];

foreach ($shapes as $shape) {
    echo $shape->describe() . "\n";
}

// new Shape(); — ошибка, потому что класс абстрактный, объект от него создать нельзя