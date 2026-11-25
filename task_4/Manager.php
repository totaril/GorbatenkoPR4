<?php
class Manager extends Employee {
    public function calculateBonus(): float {
        $bonus = $this->salary * 0.20;
        // если премия меньше минимальной — берём минимальную
        return $bonus < self::MIN_BONUS ? self::MIN_BONUS : $bonus;
    }
}