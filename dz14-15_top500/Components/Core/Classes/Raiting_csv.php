<?php

 class Raiting_csv extends File_rider{

    protected $get_csv = array();
    protected $patch;

    public function __construct($patch){
        $this->patch = $patch;
    }

    public function reading(){

        if($this->extension_check() == 'csv'){
            $riader = file($this->patch);

            foreach($riader as $value){
               $str = mb_strcut ($value, 5);
               $del_tr = str_replace("\"", "", trim($str));
               $get_csv[] = $del_tr;
            }

            return $get_csv;
         
        } else {
           exit;
        }
    }

}