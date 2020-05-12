<?php

// dz-1-1 
    
    if(isset($_POST['submit'])){
        
        $year = $_POST['year'];
        $month = $_POST['month'];

        switch ($month){
            case ($month == 'January'):
                $month = 0;
            break;
            case ($month == 'February'):
                $month = 1;
            break;    
            case ($month == 'March'):
                $month = 2;
            break;
            case ($month == 'April'):
                $month = 3;
            break;
            case ($month == 'May'):
                $month = 4;
            break;
            case ($month == 'June'):
                $month = 5;
            break;
            case ($month == 'July'):
                $month = 6;
            break;
            case ($month == 'August'):
                $month = 7;
            break;
            case ($month == 'September'):
                $month = 8;
            break;
            case ($month == 'October'):
                $month = 9;
            break;
            case ($month == 'November'):
                $month = 10;
            break;
            case ($month == 'December'):
                $month = 11;
            break;
        }

        function isleap($year, $month){
            $select = $_POST['month'];
            if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0){
                print_r ( "$year р. Високосний<br>");
                $daysArr = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                print_r("У місяці $select $daysArr[$month] д.");
            } else if($year % 4 != 0 && $year % 100 == 0 || $year % 400 != 0){
                print_r ( "$year Не високосний<br>");
                $daysArr = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                print_r("У місяці $select $daysArr[$month] д.");
            }
        }
        echo isleap($year, $month);
    }



// dz-1-2 

        // if(isset($_POST['submit'])){
        //     $word = $_POST['word'];
        //     $wordRevers = strtolower($word);
        //     //echo $wordRevers."<br>"." ".strrev($wordRevers)."<br>";
        //     if($wordRevers == strrev($wordRevers)){ 
        //         print_r("Слово $word паліндром");
        //     } else print_r("Слово $word не паліндром");
        // }


// dz-1-3

       
        // if(isset($_POST['submit'])){
           
        //     $word = $_POST['text'];
        //     $arr1 = str_split($word);
        //     $array = array( 'a', 'e', 'i', 'o', 'u');

        //     $resultArr = array_intersect($arr1, $array);
        //     $comma_separated = implode(",", $resultArr);

        //     print_r ("Виявлено голосні букви => $comma_separated");
            
        // }

    ?>
