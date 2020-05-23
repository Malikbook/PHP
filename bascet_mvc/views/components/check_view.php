<div class="row justify-content-center mx-0">
    <div class="col-10">
        <div class="row justify-content-center">
            <div class="col-7">
                <h3 class="text-center">Please provide your payment details</h3>
                <fieldset class="border border-secondary p-4 mb-2">
                    <legend>Payment of your order</legend>
                    <form action="" method="POST">
                        <label for="name">First Name:</label>
                        <input id="name" type="text" name="f_name" required placeholder="   -- Your First Name --"><br>

                        <label for="lastn">Last Name:</label>
                        <input id="lastn" type="text" name="l_name" placeholder="   -- Your Last Name --"><br>

                        <label for="card">Card Number:</label><br>
                        <input id="card" name="user_card" required pattern="[0-9]{4}[/-][0-9]{4}[/-][0-9]{4}[/-][0-9]{4}" placeholder="   **** - **** - **** - ****"><br>
                        
                        <div class="row mt-3 mb-3">
                            <fieldset class="col-8">
                                <label for="mon">Expirtion Date*</label><br>
                                <input id="mon" style="width: 150px" name="month" type="number" required placeholder="     -- Month --" pattern="[0-9]{2}">
                                <input style="width: 150px" name="year" type="number" required placeholder="       -- Year --" pattern="[0-9]{4}">
                            </fieldset>

                            <fieldset class="col-3">
                                <label for="cvc">CVC*</label>
                                <input id="cvc" style="width: 150px" name="cvc" type="number" required placeholder="       -- CVC --">
                            </fieldset>
                        </div>

                        <input type="hidden" name="total" value="<?= $data['sub_total'] ?>">
                        <a class="btn btn-danger mt-2 mb-n2" href="<?= $_SERVER['PHP_SELF'] ?>?action=go_to_bas">Go back</a>
                        <button class="btn btn-success mt-2 mb-n2 float-right" type="submit" name="submit" value="checkss">To pay</button>
                    </form>
                </filedset>
            </div>
                <?php require_once 'total_view.php' ?>
        </div>
    </div>
</div>