<?php
session_start();

require("config/db__connect.php");
require("functions/functions.php");

$cats = select('config/db__connect.php', 'SELECT * FROM categories');
if ( (!isset($_GET['category'])) || ($_GET['category'] == "all") ) {
  $products = select('config/db__connect.php', 'SELECT * FROM products');
} else {
  $products = select("config/db__connect.php", "SELECT * FROM products INNER JOIN categories ON products.category_id = categories.id WHERE categories.name = '".$_GET['category']."'");
}
$slides = select('config/db__connect.php', 'SELECT * FROM products LIMIT 3');
?>

<?php
$currentPage = 1;
require "layouts/header.php";
?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h3 class="my-4">Categories List</h3>
          <div class="list-group">
          <a href="index.php?category=all" class="list-group-item">All</a>
          <?php
          if (count($cats) > 0) {
            foreach ($cats as $cat) {
              echo "<a href=\"index.php?category=".$cat['name']."\" class=\"list-group-item\">" . $cat['name'] . "</a>";
            }
          } else {
            echo "<p>No category</p>";
          }
          ?>
          </div>
        </div>
        <!-- /.Categories list -->
        <div class="col-lg-9">
          <!-- Slide -->
          <div class="owl-carousel owl-theme">
          <?php
          foreach ($slides as $slide) {
          echo
            "<div class=\"item\">
              <a href=\"#\" style=\"background: url('uploads/".$slide['image']."') center center/contain no-repeat\" class=\"d-block w-100 s-h-350\"></a>
            </div>";
          }
          ?>
          </div>
          <!-- /.Slide    -->

          <div class="row">
            <?php
        if (!empty($_GET['mess'])) {
          echo "<p class=\"col-12 alert alert-danger\">".$_GET['mess']."</p>";
        }
        foreach ($products as $product) {
          echo
          "<div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card h-100\">
              <a href=\"#\"><img class=\"card-img-top\" src=\"uploads/".$product['image']."\" alt=\"".$product['name']."\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">".$product['name']."</a>
                </h4>
                <h5>".$product['price']."</h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>"
              .(!empty($_SESSION['user'])
              ? "<div class=\"card-footer\">
                  <form class=\"form-inline\" id=\"formCartAdd\" action=\"cart_add.php\" method=\"get\">
                    <div class=\"input-group\">
                      <button type=\"submit\" class=\"btn btn-primary btn-cart\">Add</button>
                      <input type=\"hidden\" name=\"id\" value=\"".$product['id']."\">
                      <input class=\"form-control text-center\" type=\"number\" name=\"quantity\" min=\"1\" value=\"1\"/>
                    </div>
                  </form>
              </div>"
              : ""
              ).
            "</div>
          </div>";
        }
        ?>
          </div>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <?php require "layouts/footer.php"; ?>
