<?php require "session.php"; ?>
<?php require "layout_header.php"; ?>
<?php
if (!empty($_SESSION['email'])) { ?>
    <?php require "welcome.php" ?>
    <h1 class="text-center text-capitalize">
        Users managerment
    </h1>     
    <div class="text-right mb-3">
        <a href="user_register.php" class="btn btn-primary">Add</a>
        <a href="cat_list.php" class="btn btn-primary">Categories page</a>
        <a href="product_list.php" class="btn btn-primary">Products page</a>
    </div>

    <table id="" class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require "db_connect.php";

            $sql="SELECT * FROM users";
            $result=$conn->query($sql);

            $i = 1; 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td>
                    <?php echo $i ?>
                    <span class="d-none id"><?php echo $row['id'] ?></span>
                </td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><a href="user_delete.php?id=<?php echo $row['id']; ?>"><i class='far fa-trash-alt mr-1'></i>Delete</a></td>
                <td><a href="user_edit.php?id=<?php echo $row['id']; ?>"><i class='far fa-trash-alt mr-1'></i>Edit</a></td>
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
<?php 
} else {
	echo "
	<div class=\"s-w-300 mx-auto mt-5\">
		<div class=\"alert alert-warning text-center\"><i class=\"fas fa-exclamation-triangle mr-1\"></i>You are not logged in</div>
		<div class=\"text-center\">
			<a href=\"user_register.php\" class=\"btn btn-primary\">Sign up</a> <span class=\"text-primary\">OR</span> <a href=\"user_sign_in.php\" class=\"btn btn-primary\">Log in</a>
		</div>
	</div>";
} 
?>
<?php require "layout_footer.php" ?>