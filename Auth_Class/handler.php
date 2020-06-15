<?php

if(isset($_POST['submit'])){
    if($_POST['submit'] == 'Register'){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $register = new Register($email, $pass, $patch_to_bd);

    }else if ($_POST['submit'] == 'Log in'){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $auth = new Authentication($email, $pass, $patch_to_bd);
    }
}

