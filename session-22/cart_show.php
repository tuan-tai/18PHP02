<?php session_start() ?>
<?php require "head.php";  ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php require "header.php" ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php $activeAside = 2; ?>
        <?php require "aside.php" ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Cart Details</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="active">Cart</li>
                </ol>
            </section>
            <!-- CONTENT HERE -->
            <section class="custom__content">
                <h1 class="text-center text-capitalize">Cart list</h1>
                <div class="text-right mb-3">
                    <a href="product_add.php" class="btn btn-primary">Add</a>
                    <a href="cat_list.php" class="btn btn-primary">Categories page</a>
                    <a href="user_list.php" class="btn btn-primary">Users page</a>
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
                            <th>Total</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require "db_connect.php";
                        foreach ($_SESSION['cart'] as $id => $quantity) {              
                            $sql="SELECT products.product_id, products.image, products.product_name, categories.category_name, products.model, products.price FROM products INNER JOIN categories ON products.cat_id = categories.category_id WHERE products.product_id = $id";
                            $result=$conn->query($sql);
                            // var_dump($result);exit();
                            $i = 1; 
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="productID"><?php echo $i ?></td>
                            <td class="productImage"><img src="uploads/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" width="40px"></td>
                            <td class="productName"><?php echo $row['product_name'] ?></td>
                            <td class="productCat"><?php echo $row['category_name'] ?></td>
                            <td class="productModel"><?php echo $row['model'] ?></td>
                            <td class="productPrice"><?php echo $row['price'] ?></td>
                            <td class="productQuantity"><a href="cart_change.php?action=-&id=<?php echo $row['product_id']; ?>" class="btn btn-primary">-</a><p class="btn"><?php echo $quantity ?></p><a href="cart_change.php?action=+&id=<?php echo $row['product_id']; ?>" class="btn btn-primary">+</a></td>
                            <td class="productTotal"></td>
                            <td></td>
                            <td><a href="cart_delete.php?id=<?php echo $row['product_id']; ?>" class="productDelete">X</a></td>
                        </tr>
                        <?php
                                    $i++;
                                }
                            }
                        }
                        $conn->close();             
                        ?>
                    </tbody>
                </table>
            </section>
            <!-- END CONTENT -->
        </div>
        <!-- /.content-wrapper -->
        <?php require "footer.php" ?>
    </div>
    <!-- ./wrapper -->
    <?php require "foot.php"; ?>