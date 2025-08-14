<?php
require_once (__DIR__.'/../Services/IndexService.php');
require_once (__DIR__.'/../Services/decorator/IndexCarregarJson.php');
require_once (__DIR__.'/../Services/decorator/IndexAddUser.php');


class HomeController
{
    public function index():void{
        $indexService = new IndexService($_POST);
        $indexService = new IndexCarregarJson($indexService);
        $indexService = new IndexAddUser($indexService);

        $indexService->process();
    }

    public function lerJson():array {
        $dir = __DIR__.'/../data/usuarios.json';
        $json = json_decode(file_get_contents($dir), true);

        return $json;
    }

}
