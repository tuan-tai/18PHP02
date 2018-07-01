<?php
session_start();

require("config/db__connect.php");
require("functions/functions.php");
$cats = select('config/db__connect.php', 'SELECT * FROM categories');
?>
<?php
$currentPage = 1;
require "layouts/header.php";
$total = 0;
?>
<section class="my-3 cart-show">
  <div class="container">
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        foreach ($_SESSION['cart'] as $id => $quantity) {
          $product = select("config/db__connect.php", "SELECT products.id, products.image, products.name, categories.name AS cat_name, products.price FROM products INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");
          // var_dump($product[0]['image']);exit();
        ?>
        <tr>
          <td class="productID"><?php echo $i ?></td>
          <td class="productImage"><img src="uploads/<?php echo $product[0]['image'] ?>" alt="<?php echo $product['image'] ?>" width="70px"></td>
          <td class="productName">
            <?php echo $product[0]['name'] ?>
          </td>
          <td class="productCat">
            <?php echo $product[0]['cat_name'] ?>
          </td>
          <td class="productPrice">
            <?php echo number_format($product[0]['price'], 0,"", "."); ?>
          </td>
          <td class="productQuantity">
            <a href="cart_change.php?action=-&id=<?php echo $product[0]['id']; ?>" class="btn btn-primary">-</a>
            <p class="btn">
            <?php echo $quantity ?>
            </p>
            <a href="cart_change.php?action=+&id=<?php echo $product[0]['id']; ?>" class="btn btn-primary">+</a>
          </td>
          <td class="productTotal"><?php $total = $total +  $product[0]['price'] * $quantity; echo number_format($product[0]['price'] * $quantity, 0, "", "."); ?></td>
          <td>
            <a href="cart_delete.php?id=<?php echo $product[0]['id']; ?>" class="productDelete">X</a>
          </td>
        </tr>
        <?php
            $i++;
        }
        ?>
        </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><?php echo number_format($total, 0, "", "."); ?></th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</section>
<?php
$conn->close();
require "layouts/footer.php";
?>
