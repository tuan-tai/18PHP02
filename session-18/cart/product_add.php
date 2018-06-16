<?php require "layout_header.php" ?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<?php $checkValidate = true; ?>
    <form id="productAdd" method="post" action="product_add.php" enctype="multipart/form-data">
        <h1 class="text-center">Product add</h1>
        <div class="text-right mb-3">
            <a href="product_list.php" class="btn btn-primary">List</a>
            <a href="cat_list.php" class="btn btn-primary">Categories page</a>
        </div>
        <div class="form-group">
            <label>Product name</label>
            <input class="form-control" type="text" name="productName">
            <?php 
            if (isset($_POST['submit']) && empty($_POST['productName'])) {
                $checkValidate = false;
                echo "<div class='alert alert-danger form-control'>Please input product name!</div>";
            }
            ?>
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
            <?php 
            if (isset($_POST['submit']) && empty($_POST['productImage']) && count($errorImageCheck) > 0) {
                $checkValidate = false;
                foreach ($errorImageCheck as $error) {
                    echo "<div class='alert alert-danger'>$error</div>"; 
                }
            }
            ?>
        </div>
        <div class="form-group">
            <label>Product model</label>
            <input class="form-control" type="text" name="productModel">
            <?php 
            if (isset($_POST['submit']) && empty($_POST['productModel'])) {
                $checkValidate = false;
                echo "<div class='alert alert-danger'>Please input product model!</div>";
            }
            ?>
        </div>
        <div class="form-group">
            <label>Product price</label>
            <input class="form-control" type="number" name="productPrice">
            <?php 
            if (isset($_POST['submit']) && empty($_POST['productPrice'])) {
                $checkValidate = false;
                echo "<div class='alert alert-danger'>Please input product price!</div>";
            }
            ?>
        </div>
        <div class="form-group">
            <label>Product quantity</label>
            <input class="form-control" type="number" name="productQuantity">
            <?php 
            if (isset($_POST['submit']) && empty($_POST['productQuantity'])) {
                $checkValidate = false;
                echo "<div class='alert alert-danger'>Please input product quantity!</div>";
            }
            ?>
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
        require "image_check.php";
        if ($uploadOk == 0) {
            var_dump($errorImageCheck);
        }
        if (!empty($_POST['catName']) &&  !empty($imageName) &&  !empty($_POST['productName']) &&  !empty($_POST['productModel']) &&  !empty($_POST['productPrice']) &&  !empty($_POST['productQuantity']) &&  !empty($_POST['productStatus']) &&  !empty($_POST['productCreated'])) {
            $result1 = $conn->query("SELECT id FROM categories WHERE name = '" . $_POST['catName'] . "'");
            if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) {
                    $id = $row1['id'];
                }
            }
            $sql = "INSERT INTO products(cat_id, image, name, model, price, quantity, status, created) VALUES
                    (" . $id . ", '" . $imageName . "', '" . $_POST['productName'] . "', '" . $_POST['productModel'] . "', " . $_POST['productPrice'] . ", " . $_POST['productQuantity'] . ", " . $_POST['productStatus'] . ", '" . $_POST['productCreated'] . "')";
        }
        if ($checkValidate == true) {
            $conn->query($sql);
        }
        $conn->close();
    }
 ?>