<?php
session_start();

require_once 'products.php';
require_once 'function_list.php';

if ($_GET['action'] === 'add') {
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [
            'products' => [],
        ];
    }
    
    $ids = array_keys($_SESSION['cart']['products']);
    $prod_id = $_GET['product_id'];

    prod_id($prod_id ,$ids);

    header('Location: card.php?action=list');
}


if ($_GET['action'] === 'list') {
    add_to_list($products);
}

if(isset($_POST['btn'])){

    $qty = $_POST['qty']['qty'];
    $qty_id = $_POST['qty']['id'];

    quantity($qty_id, $qty);

    header('Location: card.php?action=list');
}

if($_GET['action'] === 'remove'){
    unset($_SESSION['cart']['products'][$_GET['product_remove']]);
    header ('Location: card.php?action=list');
}

if($_GET['action'] === 'remove_all'){
    
    $_SESSION['cart']['products'] = [];
    header ('Location: card.php?action=list');

}

