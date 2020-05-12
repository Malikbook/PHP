<?php 

        $messages = array();
        
        $names = $_POST['mesName']; 
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        
        if(empty($names) or empty($email) or empty($message)) 
            header("Location: http://192.168.64.2/phpwork/");         
            
        
        if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) 
            header("Location: http://192.168.64.2/phpwork/");
            
            
        
        // if( !$messages ){
        //     $to = "vashchuk98@icloud.com";
        //     $header = "Content-Type: text/html; charset=utf8\r\n";

        //     if( mail($to,$subject,$message,$header) )
        //         $messages[] = "<font color = 'green'>Ваше сообщение отправлено!</font>";
        //     else
        //         $messages[] = "<font color = 'red'>Ваше сообщение не отправлено!</font> ";
        // }
        
        // foreach($messages as $message)
        //     echo $message . '<br/>';

        $pfile = sprintf("Name: %s \n E-mail: %s \n Titile: %s \n Text: %s \n",
        $names, $email, $subject, $message
        );

        file_put_contents("message.txt", $pfile, FILE_APPEND | LOCK_EX);

        header("Location: http://192.168.64.2/phpwork/"); 
        exit;
?>            
           