<?php

if($data['DB'] == 'start'){
    require_once __DIR__.'/start.php';
}else if($_SESSION['connect'] == 'seller'){
    require_once __DIR__.'/Sellers_table.php';
} else if($_SESSION['connect'] == 'customer'){
    require_once __DIR__."/Customers_table.php";
}else{
    echo "err";
}