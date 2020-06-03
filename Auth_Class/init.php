<?php

spl_autoload_register(function ($name){
    $files = __DIR__."/Components/Class/".$name.".php";
    include_once($files); 
}, true);

spl_autoload_register(function ($name){
    $files = __DIR__."/Components/Traits/".$name.".php";
    include_once($files);
 }, true);
