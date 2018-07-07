<?php
  session_start();
  require "../functions/functions.php";
  require "../config/db__connect.php";
  $currentActive = 2;
  require "layouts/header.php";
?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
        <h1 class="text-center text-capitalize">Products list</h1>
        <div class="text-right mb-3">
            <a href="product_add.php" class="btn btn-primary">Add</a>
        </div>
        <table id="" class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">#</th>
                    <th rowspan="2">Image</th>
                    <th rowspan="2">Product Name</th>
                    <th rowspan="2">Category</th>
                    <th rowspan="2">Price</th>
                    <th colspan="2">Action</th>
                </tr>
                <tr>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $results = select("../config/db__connect.php", "SELECT * FROM products");
                $i = 1;
                if (count($results > 0)) {
                    foreach ($results as $result) {
                ?>
                <tr>
                    <td class="productID">
                        <?php echo $i ?>
                    </td>
                    <td class="productImage"><img src="../uploads/<?php echo $result['image'] ?>" alt="<?php echo $result['image'] ?>" width="120px"></td>
                    <td class="productName"><?php echo $result['name'] ?></td>
                    <td class="productCat">
                    <?php
                        $result1 = select("../config/db__connect.php", "SELECT name from categories WHERE id = " . $result['category_id']);
                        echo $result1[0]['name'];
                    ?>
                    </td>
                    <td class="productPrice"><?php echo $result['price'] ?></td>
                    <td><a href="product_edit.php?id=<?php echo $row['id'] ?>" class="productEdit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
                    <td><a href="product_delete.php?id=<?php echo $row['id']; ?>" class="productDelete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                </tr>
                <?php
                    $i++;
                    }
                }
                else {
                ?>
                <tr>
                    <td colspan="12"><h3 class="alert alert-danger text-center">No record!</h3></td>
                </tr>
                <?php
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        </div>
            <!-- END CONTENT -->
    </div>
</section>
<?php
require "layouts/footer.php";
?>
