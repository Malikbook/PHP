<?php 

trait Valid{
    
    public function valid_email(){    
        $em = filter_var($this->email, FILTER_VALIDATE_EMAIL);
            if (!$em) {
                $_SESSION['err'] = "Wrong user email";
                $_SESSION['email'] = $this->email;
                $_SESSION['pass'] = $this->pass;
            } else {
                unset($_SESSION['err'], $_SESSION['email'], $_SESSION['pass']);
            }
    }

    public function valid_pass(){
        $password = filter_var($this->pass, FILTER_DEFAULT);

        if (empty($password) || mb_strlen($password) < 10) {
            $_SESSION['err'] = "Wrong or empty user password";
            $_SESSION['email'] = $this->email;
            $_SESSION['pass'] = $this->pass;
        } else {
            unset($_SESSION['err'], $_SESSION['email'], $_SESSION['pass']);
        }
    }
}