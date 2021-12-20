<?php

function autoloadClass($className){
    $className = strtolower(str_replace('\\', '/', $className)) . '.php';
    require $className;
}

spl_autoload_register('autoloadClass');

$home = new App\Controller\Home;
$test = new App\Helper\Test;

?>