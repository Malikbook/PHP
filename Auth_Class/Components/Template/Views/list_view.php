<?php

 if($_SESSION['patch'] == 'form_register'){
     require_once __DIR__.'/form_register.php';
 } else if($_SESSION['patch'] == 'form_login'){
     require_once __DIR__.'/form_login.php';
 } else if($_SESSION['patch'] == 'success'){
     require_once __DIR__.'/successfully.php';
 }