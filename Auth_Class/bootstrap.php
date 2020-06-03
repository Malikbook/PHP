<?php

session_start();

unset($_SESSION['email']);
unset($_SESSION['pass']);

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

require_once __DIR__.'/handler.php';
require_once __DIR__.'/routing.php';

$start_view = new Form_Views;
$start_view->go_to('list_view',[
    'page' => $_SESSION['patch'] = 'form_register' 
]);

