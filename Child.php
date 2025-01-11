<?php
declare(strict_types=1);

require_once "Human.php";
require_once "ChildInterface.php";

class Child extends Human implements ChildInterface {
    public function greeting(): void
    {
        echo "👦 Hi, I'm {$this->getName()}. {$this->getAge()} years old.\n";
    }

    public function eating(): void
    {
        echo "eating a snack!\n";
    }

    public function running(): void
    {
        echo "walking slowly...\n";
    }

    public function playing(): void
    {
        echo "playing with a toy!\n";
    }
}
