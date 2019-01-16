<?php
/**
 * Created by PhpStorm.
 * User: DR
 * Date: 16-Jan-19
 * Time: 11:40 PM
 */

require_once(ROOT . DS . 'lib' . DS . 'Controller.php');

class SiteController extends Controller
{
    public function index(){
        echo 'You are here and here is site controller';
    }

    public function create(){
        echo 'here is create action';
    }

    public function view(){
        $params = App::getRouter()->getParams();
        if(isset($params[0])){
            $alias = strtolower($params[0]);
            echo "here is your ".$alias." alias";
        }
    }
}