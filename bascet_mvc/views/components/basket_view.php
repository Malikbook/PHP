<div class="row justify-content-center">
    <div class="col-10">
    
        <?php if(count($data['prodCart']) > 0): ?>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $subTotal = 0; 
                                    $qty = [];
                                    function myList(){
                                        static $i = 1;
                                        echo $i;
                                        $i++;
                                    }
                                ?>
                                <?php foreach($data['prodCart'] as $item):?>
                                    <tr>
                                        <th scope="row"><?php myList(); ?></th>
                                        <td><img width="25px" height="25px" src="<?= $item->info->image?>" alt=""></td>
                                        <td><?= $item->info->name ?></td>
                                        <td><?= $item->info->price ?></td>
                                        <td>
                                            <input type="hidden" name="qty[id][]" value="<?= $item->id ?>">
                                            <input type="number" name="qty[qty][]" value="<?= $item->qty ?>" step="1">
                                        </td>
                                        <td>
                                            <?= $total=$item->qty*$item->info->price ?>
                                            <?php $subTotal+=$total?>
                                        </td>
                                        <td>
                                            <a style="color: red; font-size: 20px; margin-top: -4px; display: block;" href="<?= $_SERVER['PHP_SELF'] ?>?action=remove&product_remove=<?= $item->id ?>">&times;</a>
                                        </td>
                                    </tr> 
                                <?php endforeach ?>
                                    <tr>
                                        <td colspan="6" class="text-right">
                                            SubTotal: 
                                            <span class="text-right font-weight-bold text-success">
                                                <?= sprintf("$%01.2f", $subTotal) ?>
                                            </span>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                            </tbody>
                        </table>    
                        <?php require_once 'buttons_view.php' ?>
                    </form>
                <?php else: ?>
                    <?php require_once 'empty_view.php' ?>
                <?php endif ?>   
         </div> 
</div>            