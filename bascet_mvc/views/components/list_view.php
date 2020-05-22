
    <?php 
    
    if(count($data['prodCart']) > 0){
        require_once 'basket_view.php';
    } else if(isset($_SESSION['empty']) || isset($_SESSION['bas']) || isset($_SESSION['go'])){
        require_once 'basket_view.php';
    } else if (isset($_SESSION['err'])){
        require_once 'check_view.php';
    } else if(isset($_SESSION['success'])){
        require_once 'success_view.php';
    }else {
        require_once 'shop_view.php';
    }

    ?>