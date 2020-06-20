<?php

class Raiting_txt extends File_rider{

    protected $get_txt = array();
    protected $patch;

    public function __construct($patch){
        $this->patch = $patch;
    }

    public function reading(){

        if($this->extension_check() == 'txt'){
            $riader = file($this->patch);

            foreach($riader as $value){
               $str = mb_strcut ($value, 11);
               $del_tr = str_replace("\"", "", trim($str));
               $get_txt[] = $del_tr;
            }

            return $get_txt;
            
        } else {
           exit;
        }
    }

}