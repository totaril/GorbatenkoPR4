<?php
spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$employees = [
    new Manager('Алексей', 80000),
    new Developer('Дмитрий', 120000, 5),
    new Manager('Ольга', 15000),   // маленькая зп, чтобы проверить MIN_BONUS
    new Developer('Сергей', 90000, 2),
    new Manager('Ирина', 95000),
];

$totalPay = 0;
foreach ($employees as $emp) {
    echo $emp->getInfo() . "\n";
    $totalPay += $emp->getTotalPay();
}

echo "Общая сумма выплат: $totalPay руб.\n";
echo "Всего сотрудников: " . Employee::getEmployeeCount() . "\n";