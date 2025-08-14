<?php
require_once __DIR__.'/../../Interface/IndexServiceInterface.php';

class IndexCarregarJson implements IndexServiceInterface{
    public array $data;
    public function __construct(
        protected IndexServiceInterface $indexServiceInterface
        ) {}

    public function process():self{
        //======================================
        $this->indexServiceInterface->process();
        $data_post = $this->indexServiceInterface->getValue();
        //======================================
        
        //verificando se o json existe
        $dir_json = __DIR__.'/../../data/usuarios.json';
        if (!file_exists($dir_json)) {
            file_put_contents($dir_json, json_encode([]));
        }

        // Lê o conteúdo atual
        $data_json = json_decode(file_get_contents($dir_json), true);

        $this->data = ["post"=>$data_post, "json"=>$data_json, "dir"=>$dir_json];

        return $this;
    }

    public function getValue(){
        return $this->data;
    }


}