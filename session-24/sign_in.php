<?php
session_start();

require("config/db__connect.php");
require("functions/functions.php");

?>

<?php
$currentPage = 2;
require "layouts/header.php"
?>
<!-- Page Content -->
<section class="py-3 signInSection">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div style="background: url('uploads/rosegold-macbook-1.jpg') center center/cover; height: 300px;"></div>
      </div>
      <!-- Sign in and Register -->
      <div class="col-12 col-lg-6 mt-3 mt-lg-0">
        <div class="signIn">
          <!-- Nav tabs -->
          <ul class="nav nav-fill">
            <li class="border-right-0 nav-item">
              <a class="border-top-0 border-left-0 border-right-0 nav-link active" data-toggle="tab" href="#signIn">Sign in</a>
            </li>
            <li class="nav-item">
              <a class="border-top-0 border-right-0 nav-link" data-toggle="tab" href="#register">Register</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="p-3 border-top-0 tab-content">
            <!-- Sign in -->
            <div class="tab-pane active" id="signIn">
              <form action="" method="post">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" name="password" id="password" class="form-control">
                </div>
                <button type="submit" name="loginSubmit" class="btn btn-block btn-success">Sign in</button>
              </form>
            </div>
            <!-- /Sign in -->
            <!-- Register -->
            <div class="tab-pane fade" id="register">
              <form action="" method="post">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" name="password" id="password" class="form-control" >
                </div>
                <button type="submit" name="registerSubmit" class="mt-3 btn btn-block btn-primary">Register</button>
              </form>
            </div>
            <!-- /Register -->
          </div>
        </div>
      </div>
      <!-- /Sign in and register -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /.container -->
<?php require "layouts/footer.php"; ?>
<?php
if (isset($_POST['loginSubmit'])) {
  set('config/db__connect.php', 'SELECT * FROM users');
}
if (isset($_POST['registerSubmit'])) {
  
}
?>
