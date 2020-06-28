<?php

namespace Core;

class CurlConnect {
    public static function connect($url) {
        return $ch = curl_init($url);
    }

    public static function connectSettings($ch) {
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_FILETIME,true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_LOW_SPEED_TIME, 1);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
        curl_setopt($ch, CURLOPT_POSTREDIR, CURLOPT_FOLLOWLOCATION);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    }

    public static function disconnect($ch) {
        curl_close($ch);
    }
}