<div class="alert alert-info mb-5" role="alert">
    <?php if(isset($_SESSION['mass'])){
            echo $_SESSION['mass'];
        } else {
            unset($_SESSION['mass']);
            } 
    ?>
</div>  
    <div class="mt-5">
    <a href="<?= $_SERVER['PHP_SELF'] ?>?action=go_to_shop" class="btn btn-primary">Continue Shoping</a> 
    </div>    