<?php
namespace Patterns\Observer\Alura;

require "vendor/autoload.php";
date_default_timezone_set('Europe/London');

$nf = new InvoiceBuilder();
$nf->addCompany('Giant');
$nf->addCnpj(6545);
$nf->addItem(new Item('Shoes', 250));
$nf->addItem(new Item('Jacket', 550));
$nf->addItem(new Item('Tshirts', 250));
$nf->addComments('This is a comment.');
$nf->addDate(date('Y-m-d h:m:s'));
$nf->addAction(new PrintInvoice());
$nf->addAction(new SaveInvoice());
$nf->addAction(new SendInvoice());

var_dump($nf->build());
echo "\n"; 
