<?php

class View
{
    public $msg;

    function __construct()
    {

    }

    public function render($name)
    {
        require ROOT . DS . 'views' . DS . $name . '.php';
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }
}