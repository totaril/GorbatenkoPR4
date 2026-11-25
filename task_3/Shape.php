<?php
abstract class Shape {
    // абстрактные методы
    abstract public function area(): float;
    abstract public function perimeter(): float;
    abstract public function getName(): string;

    // обычный метод, общий для всех фигур
    public function describe(): string {
        return sprintf(
            "%s: площадь=%.2f, периметр=%.2f",
            $this->getName(),
            $this->area(),
            $this->perimeter()
        );
    }
}