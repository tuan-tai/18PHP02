<?php
  session_start();
  require "../functions/functions.php";
  require "../config/db__connect.php";
  require "layouts/header.php";
?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <?php
    require "cat_list.php";
    ?>
  </div>
</section>
<!-- /.content -->
<?php
require "layouts/footer.php";
?>
