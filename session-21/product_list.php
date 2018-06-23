<?php require "session.php" ?>
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
                            </td>
                            <td class="productImage"><img src="uploads/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" width="40px"></td>
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

            </section>
            <!-- END CONTENT -->
        </div>
        <!-- /.content-wrapper -->
        <?php require "footer.php" ?>
    </div>
    <!-- ./wrapper -->
<?php require "foot.php"; ?>