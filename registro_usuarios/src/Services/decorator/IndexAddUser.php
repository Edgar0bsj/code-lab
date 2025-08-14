<?php
require_once __DIR__.'/../../Interface/IndexServiceInterface.php';

class IndexAddUser implements IndexServiceInterface {

    public function __construct(
        protected IndexServiceInterface $indexServiceInterface
        ) {}
    public function process(){
        //======================================
        $this->indexServiceInterface->process();
        $data = $this->indexServiceInterface->getValue();
        //======================================


        //Data atual
        $dataAtual = date('Y-m-d H:i:s');

        $data['json'][] = [
            'id' => uniqid(), // gera um identificador único
            'nome' => $data['post']['nome'] ?? "",
            'email' => $data['post']['email'] ?? "",
            'data_nascimento' => $data['post']['data_nascimento'] ?? "",
            'registrado_em' => $dataAtual
        ];
        
        file_put_contents($data['dir'], json_encode($data['json'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        echo "Usuário registrado com sucesso! <a href='../listar.php'>Ver lista</a> <br>";
    }
    public function getValue():null{return null;}

}