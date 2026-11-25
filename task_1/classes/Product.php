<?php
class Product {
    public function __construct(
        private string $title,
        private float $price
    ) {}

    public function getInfo(): string {
        return "$this->title - $this->price руб.";
    }

    public function getPrice(): float {
        return $this->price;
    }
}