<?php
session_start();

require("config/db__connect.php");
require("functions/functions.php");
$cats = select('config/db__connect.php', 'SELECT * FROM categories');
$products = select('config/db__connect.php', 'SELECT * FROM products');
?>

<?php
$currentPage = 1;
require "layouts/header.php"
?>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h3 class="my-4">Categories List</h3>
      <div class="list-group">
        <?php
          if (count($cats) > 0) {
            foreach ($cats as $cat) {
              echo "<a href=\"#\" class=\"list-group-item\">" . $cat['name'] . "</a>";
            }
          }
        ?>
      </div>

    </div>
    <!-- /.Categories list -->

    <div class="col-lg-9">
      <div class="owl-carousel owl-theme">
        <?php
        for ($i = 0; $i < 2; $i++) {
          echo
          "<div class=\"item\">
            <a href=\"#\" style=\"background: url('uploads/".$products[$i]['image']."') center center/contain no-repeat\" class=\"d-block w-100 s-h-350\"></a>
          </div>";
        }
        ?>
      </div>
      <!-- /.Slide    -->

      <div class="row">
        <?php
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
                <a href=\"cart_add.php?id=".$product['id']."\">Add to cart</a>
              </div>"
              : ""
              ).
            "</div>
          </div>";
        }
        ?>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
<?php require "layouts/footer.php"; ?>
