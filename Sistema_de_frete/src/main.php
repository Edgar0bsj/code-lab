<?php
require ('../vendor/autoload.php');

use Edgar\SistemaDeFrete\app\FactoryFreight;


$km = 30;
$type = "normal";

$valorFrete = FactoryFreight::create($km, $type);

$format_string = sprintf("O valor final do frete ficou R$%.2f",$valorFrete->getValue());

echo $format_string;