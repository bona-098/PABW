<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($class)
{
    $path = "classes/" . $class . '.php';

    include_once $path;
}