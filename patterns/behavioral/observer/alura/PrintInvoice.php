<?php
namespace Patterns\Observer\Alura;

class PrintInvoice implements ActionAfterBuild {
    public function run(Invoice $nf){
		echo "\nPrinted.\n" ;
	}    
}