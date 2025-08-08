<?php
namespace Edgar\SistemaDeFrete\app;

use Edgar\SistemaDeFrete\app\InterfaceFreight;

class Normal implements InterfaceFreight {
    private const int VALUE_BASE = 5;
    private float $valueShipping;
    private float $valueKm = 1;
    
    function __construct(int $km) {
 
        $this->valueShipping = $this::VALUE_BASE + ($km * $this->valueKm);

    }

    public function getValue() :float{
        return $this->valueShipping;
    }
}
