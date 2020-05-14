<?php

session_start();

require_once 'products.php';

// prod_id

function prod_id($prod_id ,$ids){
    if (in_array($prod_id, $ids)) {
        $_SESSION['cart']['products'][$_GET['product_id']]++;
    } else {
        $_SESSION['cart']['products'][$_GET['product_id']] = 1;
    }
}

// add_to_list 

function add_to_list($products){
    if (count ($_SESSION['cart']['products']) > 0) {
        $cardItems = [];
        foreach($_SESSION['cart']['products'] as $product_id => $qty) {
            $cardItems[] = (object)[
                'id' => $product_id,
                'qty' => $qty,
                'info' => (object)$products[$product_id],
            ];
        }
        
        require_once 'views/card.view.php';
        exit;
    } else {
        $_SESSION['mass'] = '<span>Your shoping cart is empty...</span>';
        require_once 'views/card.view.php';
    }
}

// change in quantity

function quantity($qty_id, $qty){
    foreach($qty as $kay => $value){
        if($qty[$key] < 0){
            $qty[$key] = 1;
        }
    }

    $new_arr = array_combine(
        $qty_id,
        $qty
    );

    foreach ($new_arr as $key => $value) {
        $_SESSION['cart']['products'][$key] = $value;
    }
}

// 