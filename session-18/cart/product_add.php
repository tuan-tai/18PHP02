<?php require "layout_header.php" ?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>

    <form id="productAdd" method="post" action="product_add.php" enctype="multipart/form-data">
        <h1 class="text-center">Product add</h1>
        <div class="form-group">
            <label>Product name</label>
            <input class="form-control" type="text" name="productName" required>
        </div>
        <div class="form-group">
            <label>Category name</label>
            <select class="form-control" name="catName">
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
                <option value="1" selected="selected">Available</option>
            </select>
        </div>
        <input type="hidden" name="productCreated" value="<?php echo date('Y-m-d H:i:s') ?>">
        <input type="submit" name="submit" form="productAdd" class="btn btn-primary" value="Submit">
    </form>

<?php require "layout_footer.php" ?>
<?php 
    require "db_connect.php";
    if (isset($_POST['submit'])) {
        $checkValidate = true;
        require "image_check.php";
        if (!empty($_POST['catName']) &&  !empty($imageName) &&  !empty($_POST['productName']) &&  !empty($_POST['productModel']) &&  !empty($_POST['productPrice']) &&  !empty($_POST['productQuantity']) &&  !empty($_POST['productStatus']) &&  !empty($_POST['productCreated'])) {
            echo 'ok';
            $result1 = $conn->query("SELECT id FROM categories WHERE name = '" . $_POST['catName'] . "'");
            if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) {
                    $id = $row1['id'];
                }
            }
            // require "image_check.php";
            $sql = "INSERT INTO products(cat_id, image, name, model, price, quantity, status, created) VALUES
                    (" . $id . ", '" . $imageName . "', '" . $_POST['productName'] . "', '" . $_POST['productModel'] . "', " . $_POST['productPrice'] . ", " . $_POST['productQuantity'] . ", " . $_POST['productStatus'] . ", '" . $_POST['productCreated'] . "')";
        }
        if ($checkValidate == true) {
            $conn->query($sql);
        }
    }
 ?>