<?php

trait Check{

    public function extension_check(){
       return pathinfo($this->patch, PATHINFO_EXTENSION );
    }

}