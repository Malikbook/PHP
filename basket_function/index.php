<?php 
    session_start();

    require_once 'products.php';

    //session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pricing example · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="assets/css/pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Woman Shoes</a>
            <a class="p-2 text-dark" href="#">Man Shoes</a>
            <a class="p-2 text-dark" href="#">Children</a>
            <a class="p-2 text-success" href='card.php?action=list'>Basket</a>
        </nav>
    </div>

    <div class="container">

        <div class="row justify-content-center">
            <?php foreach ($products as $product_id => $product) :?>

                <div class="card col-3 mx-2 pt-1" style="width: 25rem;">
                    <img style="height: 200px;" src="<?= $product['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-header text-center">
                        <h5 class="card-title"><?= $product['manufacturer'] ?></h5>
                    </div>
                    <div class="card-body">
                        <strong class="card-title"><?= $product['name'] ?></strong>  
                    </div>
                    <p class="ml-4"><?= $product['price'] ?>$</p>
                    <div class="card-footer text-center">
                        <a class="btn btn-success btn-sm" href="card.php?action=add&product_id=<?= $product_id ?>">
                            Add to basket
                        </a > 
                    </div>
                </div>

            <?php endforeach?>

        </div>    

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
            </div>
        </footer>

    </div>

</body>
</html>
