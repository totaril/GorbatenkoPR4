<?php
class Order {
    public function __construct(
        private User $user,
        private array $products
    ) {}

    public function getTotal(): float {
        $sum = 0;
        foreach ($this->products as $p) {
            $sum += $p->getPrice();
        }
        return $sum;
    }

    public function getUser(): User {
        return $this->user;
    }
}