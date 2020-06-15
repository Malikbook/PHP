<?php

$view_form = new Form_Views;

if(isset($_GET['action'])){
    if($_GET['action'] == 'go_login'){
        unset($_SESSION['err'], $_SESSION['email'], $_SESSION['pass']);
        $view_form->go_to('list_view',[
            'page' => $_SESSION['patch'] = 'form_login' 
        ]);
    }

    if($_GET['action'] == 'go_register'){
        unset($_SESSION['err'], $_SESSION['email'], $_SESSION['pass']);
        $view_form->go_to('list_view',[
            'page' => $_SESSION['patch'] = 'form_register' 
        ]);
    }
}