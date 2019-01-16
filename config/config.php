<?php
require_once(ROOT . DS . 'lib' . DS . 'Config.php');

Config::set('site_name', 'Your Site Name');
Config::set('languages', array('en', 'ar'));
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_'
));
Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'site');
Config::set('default_action', 'index');
