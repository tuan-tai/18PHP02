<?php require "layout_header.php" ?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>

    <form id="productAdd" method="post" action="product_add.php">
        <h1 class="text-center">Product add</h1>
        <div class="form-group">
            <label>Product name</label>
            <input class="form-control" type="text" name="productName" required>
        </div>
        <div class="form-group">
            <label>Category name</label>
            <select class="form-control" name="catId">
                <?php 
                    require "get_cat.php";
                    foreach ($return as $cat) {
                        echo "<option>" . $cat['name'] . "</option>";
                    }
                 ?>
            </select>
        </div>
        <div class="form-group">
            <label>Product image</label>
            <input class="form-control-file" type="file" name="productImage">
        </div>
        <div class="form-group">
            <label>Product model</label>
            <input class="form-control" type="text" name="productModel">
        </div>
        <div class="form-group">
            <label>Product price</label>
            <input class="form-control" type="number" name="productPrice">
        </div>
        <div class="form-group">
            <label>Product quantity</label>
            <input class="form-control" type="number" name="productQuantity">
        </div>
        <div class="form-group">
            <label>Product status</label>
            <select class="form-control" name="productStatus">
                <option value="0">Not available</option>
                <option value="1">Available</option>
            </select>
        </div>
        <input type="hidden" name="productCreated" value="<?php echo date('Y-m-d H:i:s') ?>">
        <button type="submit" form="productAdd" class="btn btn-primary">Submit</button>
    </form>

<?php require "layout_footer.php" ?>
<?php 
    require "db_connect.php";
    if (isset($_POST)) {
        if (!empty($_POST['cat_id']) &&  !empty($_POST['productImage']) &&  !empty($_POST['productName']) &&  !empty($_POST['productModel']) &&  !empty($_POST['productPrice']) &&  !empty($_POST['productQuantity']) &&  !empty($_POST['productStatus']) &&  !empty($_POST['productCreated'])) {
            $sql = "INSERT INTO products(cat_id, image, name, model, price, quantity, status, created) VALUES
                    (" . $_POST['cat_id'] . ", '" .$_POST['productImage'] . "', '" . $_POST['productName'] . "', '" . $_POST['productModel'] . "', " . $_POST['productPrice'] . ", " . $_POST['productQuantity'] . ", " . $_POST['productStatus'] . ", " . $_POST['productCreated'] . ")";
        echo $sql;
    }
    }
 ?>