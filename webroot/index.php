<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('uploads', dirname(__FILE__).DS.'uploads');

require_once(ROOT.DS.'lib'.DS.'init.php');
require_once(ROOT.DS.'lib'.DS.'Router.php');
require_once(ROOT.DS.'lib'.DS.'app.php');


/*$router = new Router($_SERVER['REQUEST_URI']);

echo "<pre>";
print_r('Route: '. $router->getRoute().PHP_EOL);
print_r('Language: '. $router->getLanguage().PHP_EOL);
print_r('Controller: '. $router->getController().PHP_EOL);
print_r('Action to be called: '. $router->getMethodPrefix(). $router->getAction().PHP_EOL);
echo 'Params';
print_r($router->getParams());*/

//$uri = $_SERVER['REQUEST_URI'];
//
//var_dump($_SERVER);
//die;

app::run($_SERVER['REQUEST_URI']);
