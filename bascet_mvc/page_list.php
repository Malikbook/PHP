<?php 

session_start();

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



require_once 'catalog.php';
require_once 'card.php';
require_once 'routing.php';
require_once 'function_view.php';

if (!issetCard()){
    initCard();
}

return_view('components/list', [
    'prodCart' => prod_list($products),
    'prodShop' => $products
]);
