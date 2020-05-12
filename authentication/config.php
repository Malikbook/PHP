<?php

ini_set("display_errors", "On");
ini_set("display_startup_errors", "On");
ini_set("error_reporting", "E_ALL");
ini_set("log_errors", "On");
ini_set("memory_limit", "50M");

date_default_timezone_set("Europe/Kiev");

// user_password

$users_pass = array();

if (isset($_SERVER['PHP_AUTH_USER'])){

    $pass = $_SERVER['PHP_AUTH_PW'];
    $user_name = $_SERVER['PHP_AUTH_USER'];


    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $users_pass[$user_name] = $pass_hash;

}   

print_r ( $users_pass );

 
?>






