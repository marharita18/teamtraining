<?php

include_once 'config.php';

spl_autoload_register(function ($className) {
    $classFile = $className . '.php';
    if (file_exists($classFile)) {
        include_once $classFile;
        return true;
    }
    return false;
});

$controller = new Controller;

$controller -> index();

//Controller::index();