<?php 
require_once __DIR__.'/../Provider/router.php';
require_once __DIR__.'/inc/homeControllerFunc.php';
$router = new Router();

// $router->route('/',$home_func['func']);

$router->end();
