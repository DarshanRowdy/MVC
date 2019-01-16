<?php
/**
 * Created by PhpStorm.
 * User: DR
 * Date: 07-Jan-19
 * Time: 10:45 PM
 */

class Router
{
    protected $uri;

    protected $controller;

    protected $action;

    protected $params;

    protected $route;

    protected $method_prefix;

    protected $language;

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @return mixed
     */
    public function getMethodPrefix()
    {
        return $this->method_prefix;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    public function __construct($uri)
    {
//        print_r('Ok! Router was called with uri: '. $uri);
        $this->uri = urldecode(trim($uri,'/'));

        $routes = Config::get('routes');

        $this->route = Config::get('default_route');
        $this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
        $this->language = Config::get('default_language');
        $this->controller = Config::get('default_controller');
        $this->action = Config::get('default_action');

        $uri_parts = explode('?', $this->uri);

//        print_r($uri_parts);die;
        $path = $uri_parts[0];
        $path_parts = explode('/', $path);
        /*echo "<pre>";
        print_r($path_parts);*/

        if (count($path_parts)){
            //get route or language at first element
            if (in_array(strtolower(current($path_parts)), array_keys($routes))){
                $this->route = strtolower(current($path_parts));
                $this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';

                array_shift($path_parts);
            } elseif(in_array(strtolower(current($path_parts)),Config::get('languages'))){
                $this->language = strtolower(current($path_parts));
                array_shift($path_parts);
            }
            // get controller element from the next element form an array
            if (current($path_parts)){
                $this->controller = strtolower(current($path_parts));
                array_shift($path_parts);
            }

            //get action

            if (current($path_parts)){
                $this->action = strtolower(current($path_parts));
                array_shift($path_parts);
            }

            // params
            $this->params = $path_parts;
        }
    }
}