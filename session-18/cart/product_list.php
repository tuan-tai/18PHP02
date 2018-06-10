<?php require "layout_header.php" ?>
    <h1 class="text-center text-capitalize">
        Products list
    </h1>     
    <div class="text-right mb-3">
        <a href="product_add.php" class="btn btn-primary">Add</a>
        <a href="cat_list.php" class="btn btn-primary">Categories page</a>
    </div>

    <table id="" class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Model</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require "db_connect.php";

            $sql="SELECT * FROM products";
            $result=$conn->query($sql);

            $i = 1; 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td class="productID">
                    <?php echo $i ?>
                    <span class="d-none id"><?php echo $row['id'] ?></span>
                </td>
                <td class="productImage"><img src="uploads/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>"></td>
                <td class="productName"><?php echo $row['name'] ?></td>
                <td class="productCat">
                    <?php
                    $sql1 = "SELECT name from categories WHERE id = " . $row['cat_id'];
                    $result1 = $conn->query($sql1);
                    while ($row1 = $result1->fetch_assoc()) {
                        echo $row1['name'];
                    }
                    ?>         
                </td>
                <td class="productModel"><?php echo $row['model'] ?></td>
                <td class="productPrice"><?php echo $row['price'] ?></td>
                <td class="productQuantity"><?php echo $row['quantity'] ?></td>
                <td class="productStatus"><?php echo $row['status'] ?></td>
                <td class="productCreated"><?php echo $row['created'] ?></td>
                <td class="productUpdated"><?php echo $row['created'] ?></td>
                <td><a href="product_edit.php?id=<?php echo $row['id'] ?>" class="productEdit"><i class='far fa-edit mr-1'></i>Edit</a></td>
                <td><a href="product_delete.php?id=<?php echo $row['id']; ?>" class="productDelete"><i class='far fa-trash-alt mr-1'></i>Delete</a></td>
            </tr>
            <?php  
                    $i++;
                }
            }
            else {
                echo "0 results";
            }
            $conn->close();             
            ?>
        </tbody>
    </table>
    <h4 class="alert-danger text-center"></h4>
    <h4 class="alert-success text-center"></h4>
<?php require "layout_footer.php" ?>