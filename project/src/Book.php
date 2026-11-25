<?php
namespace App;

class Book extends Product {
    // конечная цена = базовая + налог
    public function getFinalPrice(): float {
        return $this->price * (1 + self::TAX);
    }
}