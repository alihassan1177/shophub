<?php

namespace Alihassan\Shophub\traits;

trait Singleton {
    
    static $instances = [];

    public static function getInstance(){

        $calledClass = get_called_class();

        if (!isset(self::$instances[$calledClass])) {
            self::$instances[$calledClass] = new $calledClass;
        }

        return self::$instances[$calledClass];
    }
}