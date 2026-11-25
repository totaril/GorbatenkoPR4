<?php
// регистрирую автозагрузчик, чтобы не писать require для каждого класса
spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$user = new User('Иван', 'ivan@example.com');
$p1 = new Product('Книга', 500);
$p2 = new Product('Ручка', 50);

$order = new Order($user, [$p1, $p2]);

echo $order->getUser()->getInfo() . "\n";
echo "Сумма заказа: " . $order->getTotal() . " руб.\n";