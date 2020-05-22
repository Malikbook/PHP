<div class="mb-2">
    <a href="<?= $_SERVER['PHP_SELF'] ?>?action=go_to_shop" class="btn btn-primary">Continue Shoping</a>
    <a href="<?= $_SERVER['PHP_SELF'] ?>?action=remove_all" class="btn btn-secondary">Clean the basket</a>
    <button type="submit" class="btn btn-danger" name="submit" value="save_changes">Save Changes</button>
    <a href="<?= $_SERVER['PHP_SELF'] ?>?action=check&sub_total=<?= $subTotal ?>" class="btn btn-warning float-right">Check</a>
</div>    