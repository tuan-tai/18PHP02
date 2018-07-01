<?php
session_start();
require("config/db__connect.php");
require("functions/functions.php");

$mess = "";

/* Check Sign in */
if (isset($_POST['loginSubmit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    echo "<p class=\"mt-3 alert alert-danger\">Please input username or password!</p>";
  } else if (!empty($_POST['username']) && !empty($_POST['password'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $userFind = select("config/db__connect.php", "SELECT * from users WHERE username = '$username' AND password = '$password'");
      if (count($userFind) == 1) {
        $_SESSION['user']['username'] = $username;
        $_SESSION['user']['role'] = $userFind[0]['role'];
      } else {
        $mess = "<p class=\"mt-3 alert alert-danger\">Error!</p>";
      }
  }
}
/* Check Register */
if (isset($_POST['registerSubmit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $mess = "<p class=\"mt-3 alert alert-danger\">Please input username or password!</p>";
  } else if (!empty($_POST['username']) && !empty($_POST['password'])) {
      $username = $_POST['username'];
      if (count(select("config/db__connect.php", "SELECT username from users WHERE username = '$username'")) > 0) {
        $mess = "<p class=\"mt-3 alert alert-danger\">Email or Username already exits!</p>";
      } else {
        $password = md5($_POST['password']);
        if (insert("config/db__connect.php", "INSERT INTO users (username, password) VALUES ('$username', '$password')")) {
          $mess = "<p class=\"mt-3 alert alert-success\">Username created!</p>";
        } else {
          $mess = "<p class=\"mt-3 alert alert-danger\">$conn->error</p>";
        }
      }
  }
}
/* End check */

if (!empty($_SESSION['user'])) {
  header('Location: index.php');
} else if (empty($_SESSION['user'])) {

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
                      <label for="username">Email or Username</label>
                      <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" name="loginSubmit" class="btn btn-block btn-success">Sign in</button>
                  </form>
                </div>
                <!-- /Sign in -->
                <!-- Register -->
                <div class="tab-pane fade" id="register">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="username">Email or Username</label>
                      <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" name="registerSubmit" class="mt-3 btn btn-block btn-primary">Register</button>
                  </form>
                </div>
                <!-- /Register -->
              </div>
            </div>
            <?php
            if (!empty($mess)) {
              echo $mess;
            }
            ?>
          </div>
          <!-- /Sign in and register -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.container -->
<?php
    require "layouts/footer.php";
}
?>
