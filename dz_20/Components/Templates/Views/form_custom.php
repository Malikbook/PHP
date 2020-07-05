<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <fieldset class="border border-primary p-3">
        <legend>Select param:</legend>

            <div class="row">
                <div>
                    <lable for="city">City:</lable>
                    <select id="city" name="city">City:
                        <option>-</option>
                        <option>Ternopil</option>
                        <option>Kropyvnitskyi</option>
                        <option>Dnipro</option>
                        <option>Rivne</option>
                        <option>Ternopil</option>
                        <option>Mykolaiv</option>
                        <option>Dnipro</option>
                    </select>
                </div>
                <div class="mx-2">
                    <lable for="rating">Rating:</lable>
                    <select id="rating"  name="rating">
                        <option>-</option>
                        <option>100</option>
                        <option>200</option>
                        <option>300</option>
                    </select>
                </div>
                <div>
                    <lable for="sell">Seller:</lable>
                    <select id="sell"  name="seller">
                        <option>-</option>
                        <option>Petro Kolichack</option>
                        <option>Sergey Maliev</option>
                        <option>Olexander Maksimchuk</option>
                        <option>Mikhailo Kovtun</option>
                        <option>Ruslan Danilov</option>
                    </select>
                </div>
                <div class="ml-5 mx-2 mx-md-2 mt-n1">
                    <button class="btn btn-primary btn-sm" tupe="submit" name="submit" value="custom_param">Search</button>
                </div>
                <div class="mt-n1">
                    <button class="btn btn-danger btn-sm" tupe="submit" name="submit" value="return">Return</button>
                </div>
            </div>

    </fieldset>
</form>