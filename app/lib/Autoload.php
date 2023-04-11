<?php

namespace PHPMVC;

define('DS', DIRECTORY_SEPARATOR);
#C:\laragon\www\PHP-MVC\app\lib\..
define('APP_PATH', dirname(realpath(__FILE__)) . DS . '..');

class Autoload
{
    public static function autoload($className)
    {
        $class  = str_replace('\\', '/', $className);
        $classFile = APP_PATH . DIRECTORY_SEPARATOR . strtolower($class) . '.php';
        if (file_exists($classFile)) {
            require $classFile;
        }
    }
}
