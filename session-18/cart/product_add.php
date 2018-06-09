<!DOCTYPE html>
<html>

<head>
    <title>Category Add</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <style type="text/css">

    </style>
</head>

<body>
    <form id="productAdd" method="post" action="product_check.php">
        <h1 class="text-center">Product Add</h1>
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <select class="form-control" name="catId">
                <?php 
					require "get_cat.php";
					foreach ($return as $cat) {
						echo "<option>" . $cat['name'] . "</option>";
					}
                 ?>
            </select>
        </div>
        <button type="submit" form="productAdd" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>