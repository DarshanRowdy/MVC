<?php
/**
 * Created by PhpStorm.
 * User: DR
 * Date: 16-Jan-19
 * Time: 11:35 PM
 */

require_once(ROOT . DS . 'lib' . DS . 'View.php');

class Controller
{
    protected $data;
    protected $model;
    protected $params;
    protected $view;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    public function __construct($data = array())
    {
        $this->view = new View();
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }

}