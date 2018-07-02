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
require "layouts/promotion.php";
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <?php
    if (!empty($_GET['mess'])) {
      echo "<p class=\"col-12 alert alert-danger\">".$_GET['mess']."</p>";
    }
    ?>
    <div class="col-12">
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
      foreach ($products as $product) {
        echo
        "<div class=\"col-lg-4 col-md-6 mb-4\">
          <div class=\"card h-100 single-product\">
            <div class=\"position-relative\">
              <img class=\"card-img-top\" src=\"uploads/".$product['image']."\" alt=\"".$product['name']."\">
              <div class=\"product-hover\">
                <a href=\"details.php?id=".$product['id']."\">See details</a>
              </div>
            </div>
            <div class=\"text-center card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">".$product['name']."</a>
              </h4>
              <h5>".number_format($product['price'], 0, "", ".")."<span class=\"ml-1\">$</span></h5>
            </div>"
            .(!empty($_SESSION['user'])
            ? "<div class=\"d-flex justify-content-center card-footer\">
                <form class=\"form-cart-add form-inline\" action=\"cart_add.php\" method=\"get\">
                  <div class=\"input-group\">
                    <input type=\"submit\" class=\"btn btn-primary btn-cart\" value=\"Add\">
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
<script>
  $(".form-cart-add").on('submit', function (event) {
    event.preventDefault();
    $.ajax({
      type: 'get',
      url: 'cart_add.php',
      data: $(this).serialize()
    }).done(function (result) {
      $(".cart-icon-img").attr("data-after", result);
    });
  });
</script>
