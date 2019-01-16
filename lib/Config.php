<?php
/**
 * Created by PhpStorm.
 * User: DR
 * Date: 07-Jan-19
 * Time: 10:41 PM
 */

class Config
{
    protected static $settings = array();

    public static function get($key){
        return isset(self::$settings) ? self::$settings[$key] : null;
    }

    public static function set($key, $value){
        self::$settings[$key] = $value;
    }
}