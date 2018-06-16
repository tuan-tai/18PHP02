<?php require "layout_header.php" ?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<?php 
	require "db_connect.php";
	$sql = "SELECT * FROM products WHERE id = " . $_GET['id'];
    $productID = $_GET['id'];
	$result_PE = $conn->query($sql);
	if ($result_PE->num_rows > 0) {
        while ($row_PE = $result_PE->fetch_assoc()) {
?>
    <form id="productEdit" class="s-w-300 m-auto" method="post" action="product_edit.php?id=<?php echo $productID; ?>" enctype="multipart/form-data">
        <h1 class="text-center">Product edit</h1>
        <div class="form-group">
            <label>Product name</label>
            <input class="form-control" type="text" name="productName" value="<?php echo $row_PE['name'] ?>" required>
        </div>
        <div class="form-group">
            <label>Category name</label>
            <select class="form-control" name="catName">
                <?php 
                    require "get_cat.php";
                    foreach ($return as $cat) {
                        echo "<option ";
                        if ($row_PE['cat_id'] == $cat['id']) 
                        {
                            echo "selected=\"selected\""; 
                        }
                        echo ">" . $cat['name'] . "</option>";
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
            <input class="form-control" type="text" name="productModel" value="<?php echo $row_PE['model'] ?>">
        </div>
        <div class="form-group">
            <label>Product price</label>
            <input class="form-control" type="number" name="productPrice" value="<?php echo $row_PE['price'] ?>">
        </div>
        <div class="form-group">
            <label>Product quantity</label>
            <input class="form-control" type="number" name="productQuantity" value="<?php echo $row_PE['quantity'] ?>">
        </div>
        <div class="form-group">
            <label>Product status</label>
            <select class="form-control" name="productStatus">
                <option value="0" <?php if ($row_PE['status'] == 0) {echo "selected=\"selected\"";} ?>>Not available</option>
                <option value="1" selected="selected">Available</option>
            </select>
        </div>
        <input type="hidden" name="productUpdated" value="<?php echo date('Y-m-d H:i:s') ?>">
        <input type="submit" name="submit" form="productEdit" class="btn btn-primary" value="Submit">
    </form>
<?php
        }
    }
 ?>
<?php require "layout_footer.php" ?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<?php 
    require "db_connect.php";
    if (isset($_POST['submit'])) {    
        require "image_check.php";
        if ($uploadOk == 0) {
            var_dump($errorImageCheck);
        }
        $checkValidate = true;
        if (!empty($_POST['catName']) &&  !empty($imageName) &&  !empty($_POST['productName']) &&  !empty($_POST['productModel']) &&  !empty($_POST['productPrice']) &&  !empty($_POST['productQuantity']) &&  !empty($_POST['productStatus']) &&  !empty($_POST['productUpdated'])) {
            $result1 = $conn->query("SELECT id FROM categories WHERE name = '" . $_POST['catName'] . "'");
            if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) {
                    $id = $row1['id'];
                }
            }
            $sql_update = "UPDATE products SET cat_id = " . $id . ", 
                            image = '" . $imageName . "', 
                            name = '" . $_POST['productName'] . "', 
                            model = '" .  $_POST['productModel'] . "', 
                            price = " . $_POST['productPrice'] . ", 
                            quantity = " . $_POST['productQuantity'] . ", 
                            status = " . $_POST['productStatus'] . ", 
                            updated = '" . $_POST['productUpdated'] . "'
                        WHERE id = " . $productID;
                        echo $productID;
                        echo $sql_update;
        }
        if ($checkValidate == true) {
            $conn->query($sql_update);
        }
    }
 ?>