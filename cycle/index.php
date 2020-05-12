<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- dz-2-1 -->

<?php
echo '<table border="1"><tr>';  
   for ($i = 0; $i < 8; $i++){
   		echo '<tr>';
   	for ($y = 0; $y < 8; $y++) { 
   		 if (($i + $y + 1) % 2 == 0) {
   			echo '<td bgcolor="black" width="270px" height="150px">'."".'</td>';
   		}else{
   			echo '<td>'."".'</td>';
   		}

   		
   	}
	   echo '</<tr>';
   };

  echo "</tr></table><br/>";
  ?>


<!-- dz-2-2 -->

<?php 

$tableR = 10;
$tableC = 10; 

$table = '<table border="1">';

for ($tr = 1; $tr <= $tableR; $tr++){
    $table .= '<tr>';
    for ($td = 1; $td <= $tableC; $td++){
        if ($tr === 1 || $td === 1){
            $table .= '<th>'. $tr*$td .'</th>'; 
        }else{
            $table .= '<td>'. $tr*$td .'</td>'; 
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; 

?>

<!-- dz-2-3 -->



<table style="border: 1px solid black; cellpadding: 3px; cellspacing: 0px; margin-top: 20px;"><tr style="display: block; border: 2px solid black;">
<?php
for ($i=1;$i<=5;$i++) {
echo '<td style="display: inline-block; border: 2px solid black; padding: 15px 10px 0 10px;">';
 for ($z=1;$z<=6;$z++) {
 echo $i.'*'.$z.'='.($i*$z).'<hr> <br>'; }
echo "</td>";
}
?>
</tr></table>

<!-- dz-2-4 -->

<div style="margin-top: 20px; border: 1px solid black; padding: 5px">
<?php

$countries = array( 
    "Italy"=>"Rome", 
    "Luxembourg"=>"Luxembourg", 
    "Belgium"=> "Brussels", 
    "Denmark"=>"Copenhagen", 
    "Finland"=>"Helsinki", 
    "France" => "Paris", 
    "Slovakia"=>"Bratislava", 
    "Slovenia"=>"Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon", 
    "Spain"=>"Madrid", 
    "Sweden"=>"Stockholm", 
    "United Kingdom"=>"London", 
    "Cyprus"=>"Nicosia", 
    "Lithuania"=>"Vilnius", 
    "Czech Republic"=>"Prague", 
    "Estonia"=>"Tallinn", 
    "Hungary"=>"Budapest", 
    "Latvia"=>"Riga", 
    "Malta"=>"Valletta", 
    "Austria" => "Vienna", 
    "Poland"=>"Warsaw");

    ksort($countries);

foreach($countries as $country=>$capital) {
    echo  "The capital of ". $country." is ".$capital."<br>";
}

?>
</div>

<!-- dz-2-5 -->

<div style="margin-top: 20px; border: 1px solid black; padding: 5px">
<?php

$temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

$temp_arr = explode(',',"$temp");

$total_temp = 0;

$temp_arr_length = count($temp_arr);

foreach($temp_arr as $temp){
    $total_temp += $temp;
}

$avg_high_temp = $total_temp / $temp_arr_length;
    echo "Average temperature is: ".$avg_high_temp."";
    sort($temp_arr);
    echo "<br> List of seven lowest temperatures: ";
    $i = 0;
    if($i < 5){
    while($i < 5){
        echo $temp_arr[$i];
        $i++;
    }
} else echo "<br> List of seven lowest temperatures:";
    $i = ($temp_arr_length - 5);

    if($i < $temp_arr_length){
        echo $temp_arr[$i].",";
        $i++;
    }else exit;

?>
</div>
    
</body>
</html>
