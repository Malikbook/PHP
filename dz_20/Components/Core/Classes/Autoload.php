<?php

require_once __DIR__."/Autoload_set.php";

class Autoload{
    private static $patch;

    public static function CheckComponents($real_way, $fileName){
        if(isset($real_way)){
            self::$patch = $real_way[$fileName];
        }
        include_once(self::connect_patch());
    }

    public static function connect_patch(){
        return sprintf("%s/%s.php", __DIR__, self::$patch);
    }

    public static function loader(){
        spl_autoload_register(function($fileName){
            $map = new Map;
            Autoload::CheckComponents($map::$real_way, $fileName);
        });
    }
}