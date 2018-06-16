<?php require "session.php" ?>
<?php require "layout_header.php" ?>
    <?php if (!empty($_SESSION['email'])) { ?>

    <h4 class="text-center alert alert-success">Hello <?php echo $_SESSION['email'] ?> <a href="user_log_out.php" class="btn btn-primary">Log out</a></h4>
    <?php 
    } 
    ?>
    <h1 class="text-center text-capitalize">
        Products list
    </h1>     
    <div class="text-right mb-3">
        <a href="product_add.php" class="btn btn-primary">Add</a>
        <a href="cat_list.php" class="btn btn-primary">Categories page</a>
        <a href="user_list.php" class="btn btn-primary">Users page</a>
        <?php if (empty($_SESSION['email'])) { ?>
            <a href="cat_list.php" class="btn btn-primary">Log in</a>
        <?php } ?>
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
                <?php  
                if (!empty($_SESSION['email'])) {
                ?>
                <th></th>
                <?php 
                } ?>
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
                    if ($result1->num_rows > 0) {
                        while ($row1 = $result1->fetch_assoc()) {
                            echo $row1['name'];
                        }
                    }
                    ?>         
                </td>
                <td class="productModel"><?php echo $row['model'] ?></td>
                <td class="productPrice"><?php echo $row['price'] ?></td>
                <td class="productQuantity"><?php echo $row['quantity'] ?></td>
                <td class="productStatus"><?php echo $row['status'] ?></td>
                <td class="productCreated"><?php echo $row['created'] ?></td>
                <td class="productUpdated"><?php echo $row['updated'] ?></td>
                <td><a href="product_edit.php?id=<?php echo $row['id'] ?>" class="productEdit"><i class='far fa-edit mr-1'></i>Edit</a></td>
                <td><a href="product_delete.php?id=<?php echo $row['id']; ?>" class="productDelete"><i class='far fa-trash-alt mr-1'></i>Delete</a></td>
                <?php
                if (!empty($_SESSION['email'])) {
                ?>
                    <td><!-- <a href="product_add_cart.php?id=<?php echo $row['id']; ?>"><i class="fas fa-cart-plus"></i>Add</a> -->
                        <form id="A<?php echo $row['id']; ?>" method="post" action="product_add_cart.php?id=<?php echo $row['id']; ?>">
                            <input type="number" name="quantity" value="1" min="1" class="text-center" style="border: 1px solid grey; width: 40px; height: 100%;">
                            <button form="A<?php echo $row['id']; ?>" class="btn btn-primary">Add</button>
                        </form>
                    </td>
                <?php
                }
                ?>
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
<?php require "layout_footer.php" ?>