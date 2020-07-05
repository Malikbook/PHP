<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <fieldset class="border border-primary p-3">
        <legend>Select param:</legend>

            <div class="row">
                <div class="col-2">
                    <lable for="city">City:</lable>
                    <select id="city" name="city">City:
                        <option>-</option>
                        <option>Ternopil</option>
                        <option>Dnipro</option>
                        <option>Lviv</option>
                        <option>Kharkiv</option>
                    </select>
                </div>
                <div class="col-2">
                    <lable for="commis">Commission:</lable>
                    <select id="commis"  name="commission">
                        <option>-</option>
                        <option>10%</option>
                        <option>11%</option>
                        <option>12%</option>
                        <option>13%</option>
                        <option>15%</option>
                    </select>
                </div>
                <div class="ml-5 mx-2 mx-md-2 mt-n1">
                    <button class="btn btn-primary btn-sm" tupe="submit" name="submit" value="sell_param">Search</button>
                </div>
                <div class="mt-n1">
                    <button class="btn btn-danger btn-sm" tupe="submit" name="submit" value="return">Return</button>
                </div>
            </div>

    </fieldset>
</form>