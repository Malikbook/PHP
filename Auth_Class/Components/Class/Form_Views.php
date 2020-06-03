<?php

class Form_Views{
    public $pat;
    public $data;
    
    public function go_to($pat, array $data = []){
        $data['patch'] = $pat;
        require_once "./Components/Master_views/master.php";
    }
}