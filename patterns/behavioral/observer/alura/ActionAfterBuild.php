<?php
namespace Patterns\Observer\Alura;

interface ActionAfterBuild {
    public function run(Invoice $nf);
}