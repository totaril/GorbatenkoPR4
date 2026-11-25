<?php
abstract class Employee {
    private static int $employeeCount = 0;
    public const MIN_BONUS = 500;

    public function __construct(
        protected string $name,
        protected float $salary
    ) {
        self::$employeeCount++;
    }

    // каждый наследник считает премию по-своему
    abstract public function calculateBonus(): float;

    public function getInfo(): string {
        return "$this->name: оклад=$this->salary, премия=" . $this->calculateBonus();
    }

    public function getTotalPay(): float {
        return $this->salary + $this->calculateBonus();
    }

    public static function getEmployeeCount(): int {
        return self::$employeeCount;
    }
}