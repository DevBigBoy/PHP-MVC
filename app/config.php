<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

# dirname => Returns a parent directory's path
define('APP_PATH', realpath(dirname(__FILE__)));
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);
