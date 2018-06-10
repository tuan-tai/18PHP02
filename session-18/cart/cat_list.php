<?php require "layout_header.php" ?>
    <h1 class="text-center text-capitalize">
        Categories list
    </h1>     
    <div class="title mb-3">
        <a href="cat_add.php" class="btn btn-primary catAdd">Add</a>
        <a href="product_list.php" class="btn btn-primary">Products page</a>
    </div>

    <form class="formCatAdd mb-3" id="formCatAdd" action="cat_add.php" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="New Category Name"/>
        </div>
        <input type="submit" name="submit" form="formCatAdd" class="btn btn-primary" value="Add"/>
    </form>

    <table id="catList" class="table table-hover table-bordered">
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

            $sql="SELECT * FROM categories";
            $result=$conn->query($sql);

            $i = 1; 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td class="catID">
                    <?php echo $i ?>
                    <span class="d-none id"><?php echo $row['id'] ?></span>
                </td>
                <td class="catName"><?php echo $row['name'] ?></td>
                <td><a href="cat_edit.php?id=<?php echo $row['id'] ?>" class="catEdit"><i class='far fa-edit mr-1'></i>Edit</a></td>
                <td><a href="cat_delete.php?id=<?php echo $row['id']; ?>" class="catDelete"><i class='far fa-trash-alt mr-1'></i>Delete</a></td>
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