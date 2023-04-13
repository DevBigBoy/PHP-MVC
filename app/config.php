<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

# dirname => Returns a parent directory's path
define('APP_PATH', realpath(dirname(__FILE__)));
