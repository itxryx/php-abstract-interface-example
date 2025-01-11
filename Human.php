<?php
declare(strict_types=1);

abstract class Human {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract protected function greeting();
    abstract protected function eating();
    abstract protected function running();

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }
}
