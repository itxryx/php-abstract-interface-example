<?php
declare(strict_types=1);

require_once "Child.php";
require_once "Adult.php";

$child = new Child("Taro", 3);
$child->greeting();
$child->eating();
$child->running();
$child->playing();

echo "-------------------\n";

$adult = new Adult("Hanako", 30);
$adult->greeting();
$adult->eating();
$adult->running();
$adult->working();
