<?php

class Register{
    
    private $email;
    private $pass;
    private $patch_to_bd;
    use Valid;
    
    public function __construct($email, $pass, $patch_to_bd){
        $this->email = $email;
        $this->pass = $pass;
        $this->patch = $patch_to_bd;
        $this->valid_email();
        $this->valid_pass();
        $this->pHash_add();
    }

    private function pHash_add(){
        $passHash = password_hash($this->pass, PASSWORD_DEFAULT);
        
        if($passHash === false){
            return $_SESSION['err'] = "Error!";
        }else {
            $acount = [];
            $acount[$this->email] = $passHash;
            
            $inp = file_get_contents($this->patch);
            $tempArray = json_decode($inp, true);

            if(isset($_SESSION['err'])){
                $step = new Form_Views;
                $step->go_to('list_view',[
                    'page' => $_SESSION['patch'] = 'form_register' 
                ]);
            }else if($tempArray == null){
                $data = [];
                $data[$this->email] = $acount;
                $filed_rec = json_encode($data); 
                file_put_contents($this->patch, $filed_rec, FILE_APPEND | LOCK_EX);

                unset($_SESSION['err']);

                $step = new Form_Views;
                $step->go_to('list_view',[
                    'page' => $_SESSION['patch'] = 'form_login' 
                ]);
            } else if(!array_key_exists($this->email, $tempArray)){

                $tempArray[$this->email] = $acount;
                $jsonData = json_encode($tempArray);
                file_put_contents($this->patch, $jsonData, LOCK_EX);

                unset($_SESSION['err']);

                $step = new Form_Views;
                $step->go_to('list_view',[
                    'page' => $_SESSION['patch'] = 'form_login' 
                ]);
            } else {
                $_SESSION['err'] = "You are already registered";
                $_SESSION['email'] = $this->email;
                $_SESSION['pass'] = $this->pass;
            }
        }
    }

}