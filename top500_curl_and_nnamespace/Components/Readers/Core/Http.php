<?php

namespace Core;

// use Core\CurlConnect;

class Http {
    public static function getCod($url) {
        $ch = CurlConnect::connect($url);
        CurlConnect::connectSettings($ch);
        curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        $httptime = round(curl_getinfo($ch, CURLINFO_TOTAL_TIME), 1).' seconds';
        return $info = [
            'cod' => $httpcode,
            'time' => $httptime
            ];
        CurlConnect::disconnect($ch);
    }
}