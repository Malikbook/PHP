<?php 

require_once 'function_view.php';

if (isset($_GET['action'])) {

    if($_GET['action'] === 'add'){
        $id = (int)$_GET['product_id']; 
        add($id);
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if($_GET['action'] === 'go_to_shop'){
        return_view('components/shop',[
            'prodCart' => prod_list($products),
            'prodShop' => $products,
            'go_to_shop' => $_SESSION['go'] = 'go'
        ]);
    } else {
        unset($_SESSION['go']);
    }

    if($_GET['action'] === 'go_to_bas'){
        return_view('components/basket',[
            'prodCart' => prod_list($products),
            'prodShop' => $products,
            'go_to_shop' => $_SESSION['bas'] = 'bas'
        ]);
        header("Location: {$_SERVER['PHP_SELF']}");
    } else {
        unset($_SESSION['bas']);
    }

    if($_GET['action'] === 'remove_all'){
        clearCard();
        return_view('components/basket',[
            'prodCart' => prod_list($products),
            'prodShop' => $products,
            'go_to_shop' => $_SESSION['empty'] = 'empty'
        ]);
        header("Location: {$_SERVER['PHP_SELF']}");
    } else {
        unset($_SESSION['empty']);
    }

    if($_GET['action'] === 'remove'){
        $id = (int)$_GET['product_remove']; 
        remove($id);
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if($_GET['action'] === 'check'){
        $subTotal = (int)$_GET['sub_total'];
        return_view('components/check', [
            'prodCart' => prod_list($products),
            'sub_total' => $subTotal
        ]);
    }

}


if(isset($_POST['submit'])){

    if($_POST['submit'] === 'save_changes'){
        quantity($_POST['qty']);
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if($_POST['submit'] === 'check'){
        unset($_SESSION['err']);
        unset($_SESSION['success']);
        if(valid([
            'card' => $_POST['user_card']
        ])){
            $date = date("F j, Y, g:i a");

            $user_product = check_data([
                'prodCart' => prod_list($products)
            ]);

            $total = $_POST['total'];

            $total_check = total_check($total);
            
            records($date, $total_check, $user_product, [
                'name' => $_POST['f_name'],
                'lname' => $_POST['l_name'],
                    ]);

            return_view('components/success',[
                'success' => $_SESSION['success'] = 'success'
                    ]);    
        } else {
            $_SESSION['err'] = 'err'; 
        }   
    }

}