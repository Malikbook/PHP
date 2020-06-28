<?php

namespace Core;

use Core\Reader\File_check;
use Core\Reader\Check;

class File_rider implements File_check{

    protected $patch;

    use Check;

    public function __construct($patch){
        $this->patch = $patch;
    }

    public function patch(){
        return $this->patch->dir; 
    }

    public function create_dataname(){
        $data = scandir($this->patch->dir);

        $file_name = array();

        foreach($data as $value){
            if(($value !== '.') && ($value !== "..")){
                $file_name[] = $value;
            }
        }
        
       return $file_name;
    }
    
    public function top_list(array $txt, array $csv){

        $lines_txt = [];
        $lines_csv = [];

        foreach($txt as $row){
            list($domain, $rank) = explode(";", $row);

            $lines_txt[] = [
                "domain" => $domain,
                "rank" => $rank
            ];
        }

        foreach($csv as $row){
            list($domain, $rank) = explode(",", $row);

            $lines_csv[] = [
                "domain" => $domain,
                "rank" => $rank
            ];
        }

        $data_top = array ();

        $data_top = array_merge($lines_txt, $lines_csv);

        $data_list = [];

        $data_list = array_merge($data_list, array_combine(
            array_column($data_top, 'domain'),
            array_column($data_top, 'rank')
        ));
    
        $as = arsort($data_list);
       
        return $data_list;
    }
}