<?php
namespace Patterns\Strategy\Alura;

require "vendor/autoload.php";

$product = new Budget(500);
$calculator = new TaxCalculator;
echo $calculator->calculate($product, new ICMS())."\n";
echo $calculator->calculate($product, new ISS())."\n";
