<div class="col-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="card-title">Categories List</h3>
      <a href="add_cat.php" class="ml-auto btn btn-primary"><i class="mr-1 fa fa-cart-plus" aria-hidden="true"></i>Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th rowspan="2" class="text-center">#</th>
            <th rowspan="2" class="text-center">Name</th>
            <th colspan="2" class="text-center">Action</th>
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
            <td>".$i."</td>
            <td>".$category['name']."</td>
            <td><a href=\"cat_edit?id=".$category['id']."\"><i class=\"mr-1 fa fa-pencil-square-o\" aria-hidden=\"true\"></i>Edit</a></td>
            <td><a href=\"cat_delete?id=".$category['id']."\"><i class=\"mr-1 fa fa-trash-o\" aria-hidden=\"true\"></i>
            Delete</a></td>
          </tr>
          ";
        }
        ?>
        </tbody>
        <!-- <tfoot>
          <tr>
            <th rowspan="2" class="text-center">#</th>
            <th rowspan="2" class="text-center">Name</th>
            <th colspan="2" class="text-center">Action</th>
          </tr>
        </tfoot> -->
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
