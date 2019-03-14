<?php
use Patterns\Structural\Flyweight\KamranAhmed\TeaMaker;
use Patterns\Structural\Flyweight\KamranAhmed\TeaShop;

require 'vendor/autoload.php';

$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);

var_dump($shop->serve());
// Serving tea to table# 1
// Serving tea to table# 2
// Serving tea to table# 5