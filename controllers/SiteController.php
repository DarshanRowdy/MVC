<?php
/**
 * Created by PhpStorm.
 * User: DR
 * Date: 16-Jan-19
 * Time: 11:40 PM
 */

require_once(ROOT . DS . 'lib' . DS . 'Controller.php');
require_once(ROOT . DS . 'models' . DS . 'SiteModel.php');


class SiteController extends Controller
{
    public function index(){
        $this->view->msg = 'Hello This meg will be pass from controller';
        $this->view->render('index/index');
    }

    public function create(){
        $SiteModel = new SiteModel();
    }

    public function view(){
        $params = App::getRouter()->getParams();
        if(isset($params[0])){
            $alias = strtolower($params[0]);
            echo "here is your ".$alias." alias";
        }
    }
}