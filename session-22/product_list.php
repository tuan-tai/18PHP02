<?php session_start(); ?>
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
                    <small>Categories list</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- CONTENT HERE -->
            <section class="custom__content">
                <h1 class="text-center text-capitalize">Products list</h1>
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
                            <th>Status</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require "db_connect.php";

                        $sql="SELECT * FROM products INNER JOIN categories ON products.cat_id = categories.category_id";
                        $result=$conn->query($sql);
                        $i = 1; 
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="productID">
                                <?php echo $i ?>
                            </td>
                            <td class="productImage"><img src="uploads/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" width="40px"></td>
                            <td class="productName">
                                <?php echo $row['product_name'] ?>
                            </td>
                            <td class="productCat">
                                <?php echo $row['category_name'] ?>
                            </td>
                            <td class="productModel">
                                <?php echo $row['model'] ?>
                            </td>
                            <td class="productPrice">
                                <?php echo $row['price'] ?>
                            </td>
                            <td class="productQuantity">
                                <?php echo $row['quantity'] ?>
                            </td>
                            <td class="productStatus">
                                <?php echo $row['status'] ?>
                            </td>
                            <td class="productCreated">
                                <?php echo $row['created'] ?>
                            </td>
                            <td class="productUpdated">
                                <?php echo $row['updated'] ?>
                            </td>
                            <td><a href="product_edit.php?id=<?php echo $row['products.id'] ?>" class="productEdit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
                            <td><a href="product_delete.php?id=<?php echo $row['products.id']; ?>" class="productDelete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                            <td>
                                <button class="btn-addCart btn btn-primary">Add</button>
                                <form action="cart_add.php" method="get" style="display: none;">
                                    <input type="hidden" name="id" value="<?php echo $row['product_id'] ?>">
                                    <input type="number" name="quantity" value="1" min="1" style="width: 50px;">
                                    <input type="submit" value="Add" class="btn btn-primary">
                                </form>
                            </td>
                        </tr>
                        <?php
                                $i++;
                            }
                        }
                        else {
                            ?>
                            <tr>
                                <td colspan="12">
                                    <h3 class="alert alert-danger text-center">No record!</h3></td>
                            </tr>
                            <?php
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