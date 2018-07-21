<?php include 'views/frontend/common/header.php'; ?>
<?php 
if ( !empty($_SESSION['user']['username']) && !empty($_SESSION['user']['role']) ) {
    echo '<p class="alert alert-danger">Please log out first!</p>';
} else {
?>
<form method="post" action="admin.php?controller=login">
    <p>User name <input type="text" name="username"></p>
    <p>Password <input type="password" name="password"></p>
    <p><input type="submit" name="login" value="Login"></p>
</form>
<?php } ?>
<?php include 'views/frontend/common/footer.php';?>