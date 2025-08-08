<?php
namespace Edgar\SistemaDeFrete\app;


use Edgar\SistemaDeFrete\app\Normal;
use Edgar\SistemaDeFrete\app\Expressa;
use Edgar\SistemaDeFrete\app\Agendada;
use Edgar\SistemaDeFrete\app\InterfaceFreight;
class FactoryFreight{
    public static function create(float $km, string $type) :InterfaceFreight{
        if ($type == "normal") 
        {
            return new Normal($km);

        } elseif ($type == "agendada")
        {
            return new Agendada($km);

        } elseif ($type == "Expressa")
        {
            return new Expressa($km);
        }
        
        throw new \InvalidArgumentException('invalid tax type');
    }
}
