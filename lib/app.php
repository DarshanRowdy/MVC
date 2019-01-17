<?php
/**
 * Created by PhpStorm.
 * User: DR
 * Date: 16-Jan-19
 * Time: 11:33 PM
 */

class app
{
    protected static $router;

    /**
     * @return mixed
     */
    public static function getRouter()
    {
        return self::$router;
    }

    public static function run($uri){
        self::$router = new Router($uri);

        $controllerClass = ucfirst(self::$router->getController()).'Controller';
        $controllerMethod = strtolower(self::$router->getMethodPrefix().self::$router->getAction());
        //calling controller method
        $controllerObj = new $controllerClass();
        if(method_exists($controllerObj, $controllerMethod)){
            $result = $controllerObj->$controllerMethod();
        } else {
            throw new Exception('Method '.$controllerMethod. 'of class '. $controllerClass.'does not exist');
        }
    }
}