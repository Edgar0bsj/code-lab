<?php
require_once(__DIR__.'/../Interface/IndexServiceInterface.php');

/**
 * 
 * =================================================
 * Service Index
 * =================================================
 * 
 */
class IndexService implements IndexServiceInterface{
 
    public function __construct(
        public array $data
        ) {}

    public function process(){
        //Validação
        echo "Validação pendente! <br>";
        echo "Programador Preguiçoso! .-. <br>";

        return null;
    }
    public function getValue(){
        return $this->data;
    }

}