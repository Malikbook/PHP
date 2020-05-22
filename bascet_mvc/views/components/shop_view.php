<div class="row justify-content-center">
    <?php foreach ($data['prodShop'] as $product_id => $product) :?>
        
            <div class="card col-3 mx-2 pt-1" style="width: 25rem;">
            <img src="<?= $product['image'] ?>" class="card-img-top" height="200px" width="100px" alt="...">
            <div class="card-header text-center">
                <h5 class="card-title"><?= $product['manufacturer'] ?></h5>
            </div>
            <div class="card-body">
                <strong class="card-title"><?= $product['name'] ?></strong>  
            </div>
            <p class="ml-4"><?= $product['price'] ?>$</p>
            <div class="card-footer text-center">
                <a class="btn btn-success btn-sm" href="<?= $_SERVER['PHP_SELF'] ?>?action=add&product_id=<?= $product_id ?>">
                    Add to basket
                </a > 
            </div>
            </div>

    <?php endforeach?>
</div>