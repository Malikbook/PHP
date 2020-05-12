<?php 

include_once "config.php";

    echo"<pre>";
    var_dump ($_FILES);

    $files = "uloads/";

if(isset($_FILES)){

    $name = $_FILES['userfile']['name'];
    $type = $_FILES['userfile']['type'];
    $size = $_FILES['userfile']['size'];
    $tmp_name = $_FILES['userfile']['tmp_name'];
    $file_err = $_FILES['userfile']['error'];
    
    $allowedTypes = array('image/jpeg','image/png','image/gif');

    for($i = 0; $i < count($_FILES['userfile']['name']); $i++) { 

        $uploadFile[$i] = $files . basename($_FILES['userfile']['name'][$i]);

        $fileChecked[$i] = false;

        // echo $_FILES['userfile']['name'][$i]." | ".$_FILES['userfile']['type'][$i]." — ";

        for($j = 0; $j < count($allowedTypes); $j++) { 
        if($_FILES['userfile']['type'][$i] == $allowedTypes[$j]) {
        $fileChecked[$i] = true;
        break;
            }

        }

        if($fileChecked[$i]) { 
            if(move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadFile[$i])) {
            echo "<span style='color: green'>Success</span><br>";
            } else {
            echo "Ошибка ".$_FILES['userfile']['error'][$i]."<br>";
            
            }

        }else {
            echo "<span style='color: red'>Недопустимый формат</span> <br>";
            }
    }

} else {
    echo "<span style='color: red'>Вы не прислали файл!</span>" ;
    }


?>

