<?php
namespace framework;

use Execution;

class App{
    public static $container=[];

    public static function  bind($key, $value){
        static::$container[$key] = $value;
    }

    public static function get($key){
        if (!array_key_exists($key, static::$container)){
            throw now \Exception("No {$key} is bound in container");
        }
        return static::$container[$key];
    }

}