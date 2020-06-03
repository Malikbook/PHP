<?php

require_once __DIR__."/init.php";

if(isset($_POST['submit'])){
    if($_POST['submit'] == 'Register'){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $register = new Register($email, $pass);

    }else if ($_POST['submit'] == 'Log in'){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $auth = new Authentication($email, $pass);
    }
}

