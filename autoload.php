<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 7:21
 */

spl_autoload_register(function ($className) {
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $className . ".php";
    if (is_readable($file)) require_once $file;
});