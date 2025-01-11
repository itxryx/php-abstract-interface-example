<?php
declare(strict_types=1);

require_once "Human.php";
require_once "AdultInterface.php";

class Adult extends Human implements AdultInterface {
    public function greeting(): void
    {
        echo "🧑 Hi, I'm {$this->getName()}. {$this->getAge()} years old.\n";
    }

    public function eating(): void
    {
        echo "eating a wasabi.\n";
    }

    public function running(): void
    {
        echo "walking fast!\n";
    }

    public function working(): void
    {
        echo "working harder...\n";
    }
}
