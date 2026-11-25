<?php
class Circle extends Shape {
    public function __construct(private float $radius) {}

    public function getName(): string {
        return 'Круг';
    }

    public function area(): float {
        return M_PI * $this->radius ** 2;
    }

    public function perimeter(): float {
        return 2 * M_PI * $this->radius;
    }
}