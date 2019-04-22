<?php
namespace Patterns\Observer\Alura;

class SendInvoice implements ActionAfterBuild {
    public function run(Invoice $nf){
        echo "\nSent.\n" ;
    }
}

