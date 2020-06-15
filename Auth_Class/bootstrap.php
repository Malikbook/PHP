<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

unset($_SESSION['email']);
unset($_SESSION['pass']);

spl_autoload_register(function ($name){
    $files = __DIR__."/Components/Core/Class/".$name.".php";
    if(file_exists($files) == true){
        include_once($files); 
    }
});

spl_autoload_register(function ($name){
    $files = __DIR__."/Components/Core/Traits/".$name.".php";
    if(file_exists($files) == true){
        include_once($files); 
    }
 });

require_once __DIR__.'/config.php';
require_once __DIR__.'/handler.php';
require_once __DIR__.'/routing.php';

$start_view = new Form_Views;
$start_view->go_to('list_view',[
    'page' => $_SESSION['patch'] = 'form_register' 
]);

