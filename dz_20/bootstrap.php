<?php

ini_set("display_errors", "On");
ini_set("display_startup_errors", "On");
ini_set("error_reporting", "-1");
ini_set("log_errors", "On");
ini_set('memory_limit', '128M');
ini_set('WP_MEMORY_LIMIT', '128M');
date_default_timezone_set("Europe/Kiev");

session_start();

require_once __DIR__."/Components/Core/Classes/Autoload.php";

Autoload::loader();

$config = include_once 'config.php';

$db = new Core\Classes\DB($db_['info']);

Core\Classes\Router::routing($db);

Core\Classes\Master_views::go_to('Views_controller', [
    "DB" => 'start'
]);