<?php
session_start();
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Tony Computer</a>
    <button class="navbar-toggler navbar-toggler-custom" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo ($currentPage == 1) ? " active " : "" ?>">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <?php
        if (empty($_SESSION['user'])) {
          echo
          "<li class=\"nav-item\">
            <a class=\"nav-link".($currentPage == 2 ? " active " : "")."\" href=\"sign_in.php\">Sign in/Register<span class=\"sr-only\">(current)</span></a>
          </li>";
        } else {
          echo
          "<li class=\"ml-lg-3 nav-item\">
            <div class=\"cart-icon dropdown\">
              <a href=\"javascript:void(0)\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">
                <span style=\"background: white url('uploads/cart-icon.png') center center/contain\" class=\"cart-icon-img\"></span>
              </a>
              <div class=\"mb-3 dropdown-menu dropdown-menu-right\">
                <a class=\"dropdown-item\" href=\"\" style=\"border-bottom: 1px solid lightgray\">".$_SESSION['user']['username']."</a>
                ".($_SESSION['user']['role'] == 1 ? "<a class=\"dropdown-item\" href=\"admin/index.php\">Admin page</a>" : "")."
                <a class=\"dropdown-item\" href=\"cart_show.php\">My cart</a>
                <a class=\"dropdown-item\" href=\"sign-out.php\">Sign out</a>
              </div>
            </div>
          </li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
