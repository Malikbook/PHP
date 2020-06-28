<?php

namespace Core\Reader;

use Core\File_rider;

 class Raiting_csv extends File_rider{

    protected $get_csv = array();
    protected $names;
    protected $patch;

    public function __construct($names, $patch){
        $this->names = $names;
        $this->patch = $patch;
    }

    public function reading_csv(){

            $data = $this->names;

                foreach($data as $key => $value){

                    $this->name = $value;

                    if($this->extension_check() == 'csv'){

                        $patch_to_file = sprintf("$this->patch/$this->name");

                        $open_file = file($patch_to_file);

                        foreach($open_file as $value){
                        $str = mb_strcut ($value, 5);
                        $del_tr = str_replace("\"", "", trim($str));
                        $get_csv[] = $del_tr;
                        }

                        return $get_csv;
                    } 
        }
    }

}