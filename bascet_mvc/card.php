<?php

function issetCard(){
   return isset($_SESSION['cart']);
}

function initCard(){
    $_SESSION['cart'] = [
        'products' => [],
    ];
}

function &prodCard(){
    return $_SESSION['cart']['products'];
}

function prod_list(array $catalog){

    $filled = [];

    $prod = &prodCard();

    if (count ($prod) > 0) {
                foreach($_SESSION['cart']['products'] as $product_id => $qty) {
                    $filled[] = (object)[
                        'id' => $product_id,
                        'qty' => $qty,
                        'info' => (object)$catalog[$product_id],
                    ];
                 }    
                            
        } 
    return $filled;
}

function quantity(array $qty){

    $prod = &prodCard();

    $prod = array_combine(
        $qty['id'],
        $qty['qty']
    );

    array_walk($prod, function(&$qty) {
        if ($qty <= 0) {
            $qty = 1;
        }
    });
}

function clearCard(){
    $prod = &prodCard();
    $prod = [];
}

function prodEx($id){
    $prod = prodCard();

    if(count($prod) > 0){
        if(in_array($id, array_keys($prod))){
            return true;
        }
    } 
}

function add($id, $qty=1){

    $prod = &prodCard();

    if(prodEx($id)){
        $prod[$id]++;
    }else {
        $prod[$id] = $qty;
    }
}

function remove($id){

    if(prodEx($id)){
        $prod = &prodCard();
        unset($prod[$id]);
        return true;
    }
}

function valid(array $data = []){
    if(strlen($data['card']) == 19){
        return true;
    } 
}

function check_data(array $data = []){

    $data1=[];
    $data2=[];

    foreach($data['prodCart'] as $items){
        $data1[] = $items->info->name;
        $data2[] = $items->qty;
    }

    $data3= array_combine($data1, $data2);

    return $data3;
}

function total_check($total){

    $interest = 2;
    $deliv = $total/100*$interest;
    $sub_total = $total + $deliv;

    return $sub_total;
}

function records( $date, $total_check, $user_product, array $data =[] ){

    $filed = 'db_check.json';

    $data_user_prod = [
        'Name' => $data['name'],
        'Lname' => $data['lname'],
        'Date' => $date,
        'Total' => $total_check,
        'info' => $user_product
    ];

    $inp = file_get_contents($filed);
    $tempArray = json_decode($inp);


    if($tempArray == null){
        $arr = [];
        $arr[] = $data_user_prod;
        $filed_rec = json_encode($arr); 
        file_put_contents($filed, $filed_rec, FILE_APPEND | LOCK_EX);
    } else {
        array_push($tempArray, $data_user_prod);
        $jsonData = json_encode($tempArray);
        file_put_contents($filed, $jsonData);
    }
    
}