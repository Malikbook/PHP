
    <?php 
    
    if(count($data['prodCart']) > 0){
        include_once 'basket_view.php';
    } else if(isset($_SESSION['empty']) || isset($_SESSION['bas']) || isset($_SESSION['go'])){
        include_once 'basket_view.php';
    } else if (isset($_SESSION['success'])){
        include_once 'success_view.php';
    } else if(isset($_SESSION['err'])){
        include_once 'check_view.php';
    }else {
        include_once 'shop_view.php';
    }

    ?>