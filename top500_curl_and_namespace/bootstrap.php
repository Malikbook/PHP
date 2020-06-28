<?php

ini_set("display_errors", "On");
ini_set("display_startup_errors", "On");
ini_set("error_reporting", "-1");
ini_set("log_errors", "On");
ini_set("memory_limit", "100M");
set_time_limit (0);
date_default_timezone_set("Europe/Kiev");

session_start();

$config = include_once 'config.php';

spl_autoload_register(function($className) use ($config) {
    require_once sprintf(
        $config->bootstrap->classes, str_replace("\\", DIRECTORY_SEPARATOR, $className)
    );
});

// spl_autoload_register(function ($name){
//     $files = __DIR__."/Components/Core/Interfaces/".$name.".php";
//     if(file_exists($files) == true){
//         include_once($files);
//     }
// }, true);

// spl_autoload_register(function ($name){
//     $files = __DIR__."/Components/Core/Traits/".$name.".php";
//     if(file_exists($files) == true){
//         include_once($files);
//     }
//  }, true);

require_once __DIR__."/handler.php";

Core\Reader\Master_views::go_to('Views_controller', [
    "top" => $top->top_list($txt->reading_txt(), $csv->reading_csv())
]);