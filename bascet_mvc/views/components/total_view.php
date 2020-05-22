<div class="col-5 text-center">
                <h3 class="text-primary">Order Summary</h3>
                <table class="table table-sm mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col" class="border-right border-left">Quantity</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <?php foreach ( $data['prodCart'] as $item):?>
                    <tr class="border-bottom">
                        <th><?= $item->info->name ?></th>
                        <th class="border-right border-left"><?= $item->qty ?></th>
                        <th><?= $item->info->price."$" ?></th>
                    </tr>
                    <?php endforeach ?>
                </table>
                <span class="float-left" style="font-size: 20px;">Sub Total:
                    <span class="text-success"><?= $data['sub_total'].'$'?></span></span><br>
                    <?php 
                        $interest = 2;
                        $deliv = $data['sub_total']/100*$interest  
                    ?>
                <span class="float-left" style="font-size: 20px; clear: both;">Delivery:
                    <span class="text-success"> <?= $deliv."$" ?></span></span><br> 
                    <?php
                        $pay = $data['sub_total']+$deliv
                    ?>
                <span class="float-left" style="font-size: 30px; clear: both;">To pay:
                    <span class="text-success"> <?= $pay."$" ?></span></span>    
            </div>