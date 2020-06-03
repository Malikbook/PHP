<?php

class Authentication{
    private $email;
    private $pass;
    use Valid;

    public function __construct($email, $pass){
        $this->email = $email;
        $this->pass = $pass;
        $this->valid_email();
        $this->valid_pass();
        $this->userAuth();
    }

    private function userAuth(){
        $filed = "bd.json";
            
        $inp = file_get_contents($filed);
        $tempArray = json_decode($inp, true);

            if(isset($_SESSION['err'])){
                $step = new Form_Views;
                $step->go_to('list_view',[
                    'page' => $_SESSION['patch'] = 'form_login' 
                ]);
            }else if(array_key_exists($this->email, $tempArray)){
                if(false === password_verify($this->pass, $tempArray[$this->email][$this->email])){
                   
                    $_SESSION['err'] = 'Sorry, wrong user email or password';
                    $_SESSION['email'] = $this->email;
                    $_SESSION['pass'] = $this->pass;

                    $step = new Form_Views;
                    $step->go_to('list_view',[
                        'page' => $_SESSION['patch'] = 'form_login' 
                    ]);
                } else {

                    $options = [
                        'cost' => 12,
                    ];

                    if(password_needs_rehash($tempArray[$this->email][$this->email], PASSWORD_DEFAULT, $options)){
                        $tempArray[$this->email][$this->email] = password_hash($this->pass, PASSWORD_DEFAULT, $options);

                        $jsonData = json_encode($tempArray);
                        file_put_contents($filed, $jsonData, LOCK_EX);

                        unset($_SESSION['err'], $_SESSION['email'], $_SESSION['pass']);

                        $step = new Form_Views;
                        $step->go_to('list_view',[
                            'page' => $_SESSION['patch'] = 'success' 
                        ]);
                    } else{

                        unset($_SESSION['err'], $_SESSION['email'], $_SESSION['pass']);

                        $step = new Form_Views;
                        $step->go_to('list_view',[
                            'page' => $_SESSION['patch'] = 'success' 
                        ]);
                    }
                }
            } else {
                $_SESSION['err'] = 'Sorry, but user with this email address not registered';
                $_SESSION['email'] = $this->email;
                $_SESSION['pass'] = $this->pass;

                $step = new Form_Views;
                    $step->go_to('list_view',[
                        'page' => $_SESSION['patch'] = 'form_login' 
                    ]);
            }
    }
}