<?php
namespace App\Services;

class PriceFormatter {
    public static function format(float $price): string {
        // форматирую число с разделителями и добавляю "руб."
        return number_format($price, 2, '.', ' ') . ' руб.';
    }
}