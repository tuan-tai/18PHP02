<?php
  session_start();
  require "../functions/functions.php";
  require "../config/db__connect.php";
if (isAdmin()) {
  require "layouts/header.php";
  ?>
  <!-- Main content -->
  <section class="content">
    <div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header d-flex align-items-center catTitle">
        <h3 class="card-title">Categories List</h3>
        <a href="cat_add.php" class="ml-auto btn btn-primary catAdd"><i class="mr-1 fa fa-cart-plus" aria-hidden="true"></i>Add</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th rowspan="2" class="text-center" style="width: 10%;">#</th>
              <th rowspan="2" class="text-center">Name</th>
              <th colspan="2" class="text-center" style="width: 20%;">Action</th>
            </tr>
            <tr>
              <th class="text-center">Edit</th>
              <th class="text-center">Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $categories = select("../config/db__connect.php", "SELECT * FROM categories");
          $i = 0;
          foreach ($categories as $category) {
            $i++;
            echo "
            <tr>
              <td>".$i."<span class=\"catID d-none\">".$category['id']."</span></td>
              <td class=\"catName\">".$category['name']."</td>
              <td><a href=\"cat_edit.php?id=".$category['id']."\" class=\"catEdit\"><i class=\"mr-1 fa fa-pencil-square-o\" aria-hidden=\"true\"></i>Edit</a></td>
              <td><a href=\"cat_delete.php?id=".$category['id']."\"><i class=\"mr-1 fa fa-trash-o\" aria-hidden=\"true\"></i>
              Delete</a></td>
            </tr>
            ";
          }
          ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </div>
  </section>
  <!-- /.content -->
  <?php
  require "layouts/footer.php";
} else {
  header("location: ../index.php");
}
?>
