<?php
/*
spl_autoload_register('myAutoLoader');

    function myAutoLoader($className)
    {
        $path = "classes/";
        $extension = ".class.php";
        $fullPath = $path.$className.$extension;

        if(!file_exists($fullPath))
        {
            return false;
        }

        include_once $fullPath;
    }
*/

spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') != false)
    {
        $path = '../classes/abc/';
    }
    else
    {
        $path = 'classes/abc/';
    }
    $extension = '.class.php';
    require_once $path.$className.$extension;
}

