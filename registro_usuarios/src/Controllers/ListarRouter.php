<?php
require_once (__DIR__.'/HomeController.php');

$route = new HomeController();
$data = $route->lerJson();