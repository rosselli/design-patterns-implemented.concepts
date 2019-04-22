<?php
namespace Patterns\Observer\Alura;

class SaveInvoice implements ActionAfterBuild {
    public function run(Invoice $nf){
        echo "\nSaved.\n" ;
    }
}

