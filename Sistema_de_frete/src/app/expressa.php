<?php
namespace Edgar\SistemaDeFrete\app;

use Edgar\SistemaDeFrete\app\InterfaceFreight;

class Expressa implements InterfaceFreight {
    private const int VALUE_BASE = 10;
    private float $valueShipping;
    private float $valueKm = 2;
    
    function __construct(int $km) {
 
        $this->valueShipping = $this::VALUE_BASE + ($km * $this->valueKm);

    }

    public function getValue() :float{
        return $this->valueShipping;
    }
}