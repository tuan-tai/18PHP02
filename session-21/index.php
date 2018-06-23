<?php require "head.php";  ?>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php require "header.php" ?>
        
        <!-- Left side column. contains the logo and sidebar -->
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
                <?php require "session.php"?>
                    <a href="cat_add.php" class="btn btn-primary">Add</a>
                    <a href="product_list.php" class="btn btn-primary">Products page</a>
                    <a href="user_list.php" class="btn btn-primary">Users page</a>

                    <form class="custom__pt10" id="formCatAdd" action="cat_add.php" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="New Category Name"/>
                        </div>
                        <input type="submit" name="submit" form="formCatAdd" class="btn btn-primary" value="Add"/>
                    </form>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "db_connect.php";

                            $sql = "SELECT * FROM categories";
                            $result = $conn->query($sql);

                            $i = 1;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td class="catID">
                                    <?php echo $i ?>
                                </td>
                                <td class="catName"><?php echo $row['name'] ?></td>
                                <td><a href="cat_edit.php?id=<?php echo $row['id'] ?>" class="catEdit"><i class='far fa-edit mr-1'></i>Edit</a></td>
                                <td><a href="cat_delete.php?id=<?php echo $row['id']; ?>" class="catDelete"><i class='far fa-trash-alt mr-1'></i>Delete</a></td>
                            </tr>
                            <?php
                            $i++;
                                }
                            } else {
                                echo "0 results";
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
