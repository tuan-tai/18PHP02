<!DOCTYPE html>
<html>
<head>
    <title>Category List</title>
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <style type="text/css">
        
</style>
</head>
<body>
    <h1 class="text-center text-capitalize">Categories list</h1>
    <table id="catList" class="display cell-border hover table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
                <?php  
                require "db_connect.php";

                $sql="SELECT * FROM categories";
                $result=$conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row=$result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td> " . $row["id"]. "</td><td class='C" . $row["id"] . "'>" . $row["name"] . "</td>";
                        echo "<td><p class='catListEdit' id=C" . $row["id"] ." ><i class='far fa-edit'></i> Edit</p></td>";
                        echo "<td><i class='far fa-trash-alt mr-1'></i>Delete</td>";
                        echo "</tr>";
                    }
                }
                else {
                    echo "0 results";
                }
                
                $conn->close();
                ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>