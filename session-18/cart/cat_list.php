<?php 
    require "db_connect.php";

    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Category List</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome-all.min.css">
    <style type="text/css">
    table {
        border-collapse: collapse;
        width: 300px;
        margin: auto;
    }

    caption {
        margin-bottom: 15px;
    }

    td {
        padding-left: 10px;
        height: 55px;
    }

    td:first-child {
        width: 20px;
    }
    td:nth-child(2) {
        width: 170px;
    }
    td:nth-child(2) input {
        width: 80px;
        margin-right: 5px;
        display: inline-block;
    }
    td:nth-child(2) .save {
        width: 50px;
    }
    .edit {
        cursor: pointer;
        display: inline-block;
    }

    .edit:hover {
        color: blue;
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <table border="1">
        <caption>Category List</caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td> " . $row["id"]. "</td><td class='C" . $row["id"] . "'>" . $row["name"] . "</td>";
                    echo "<td><p class='edit' id=C" . $row["id"] ." ><i class='far fa-edit'></i> Edit</p>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
         ?>
        
    </table>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".edit").click(function() {
            var value = $("." + $(this).attr('id')).text();
            $("." + $(this).attr('id')).replaceWith(`<td class=` + $(this).attr('id') + `><form method="post"><input type="text" name="name" value="` + value + `"/><input type='hidden' name='id' value="` + $(this).attr('id').slice(1) + `"/><input type="submit" value="Save" class="save" /></form></td>`);
            $(this).hide();
        });
    });
    </script>
</body>

</html>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['name'])) {
            $sql = "UPDATE categories set name = '" . $_POST['name'] . "' WHERE id = ". $_POST['id'];
            echo $_POST['name'];

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {

        }
    }
    $conn->close();
 ?>