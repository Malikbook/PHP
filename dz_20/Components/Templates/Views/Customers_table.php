<div class="container">
    <h3 class="text-primary">CUSTOMERS:</h3>

    <?php require_once __DIR__."/form_custom.php" ?>

    <?php if($data['customers'] !== null): ?>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Seller Name</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($data['customers'] as $info): ?>
                        <tr>
                            <td><?= $info['customer_id'] ?></td>
                            <td><?= $info['customer_name'] ?></td>
                            <td><?= $info['customer_city'] ?></td>
                            <td><?= $info['rating'] ?></td>
                            <td><?= $info['seller_name'] ?></td>
                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    <?php else: ?>   
        <span class="text-danger">Information Error!</span>
    <?php endif; ?>    
</div>