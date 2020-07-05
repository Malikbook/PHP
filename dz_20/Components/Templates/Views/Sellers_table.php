<div class="container">
    <h3 class="text-primary">SELLERS (office managers):</h3>

    <?php require_once __DIR__."/form_sellers.php" ?>

    <?php if($data['sellers'] > 0): ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Commission</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($data['sellers'] as $info): ?>
                        <tr>
                            <td><?= $info['seller_id'] ?></td>
                            <td><?= $info['seller_name'] ?></td>
                            <td><?= $info['seller_city'] ?></td>
                            <td><?= $info['commission']."%" ?></td>
                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    <?php else: ?>   
        <span class="text-danger">Information Errore!</span>
    <?php endif; ?>    
</div>