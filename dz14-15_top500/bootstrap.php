<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

spl_autoload_register(function ($name){
    $files = __DIR__."/Components/Core/Classes/".$name.".php";
    if(file_exists($files) == true){
        include_once($files);
    } 
}, true);

spl_autoload_register(function ($name){
    $files = __DIR__."/Components/Core/Interfaces/".$name.".php";
    if(file_exists($files) == true){
        include_once($files);
    }
}, true);

spl_autoload_register(function ($name){
    $files = __DIR__."/Components/Core/Traits/".$name.".php";
    if(file_exists($files) == true){
        include_once($files);
    }
 }, true);

require_once __DIR__."/handler.php";

Master_views::go_to('Views_controller', [
    "top" => $top->top_list()
]);