<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
    <?php
    include_once("db_connection.php");
    ?>
</head>

<body>
    <h4 class="text-center">All Employees in Northwind Co.</h4>
    <?php
    $Delete_Icon = '<i class="bi-trash-fill" style="font-size: 1.3rem; color: red;"></i>';
    $Update_Icon = '<i class="bi-tools" style="font-size: 1.3rem; color: cornflowerblue;"></i>';

    $sql = "SELECT firstname , lastname , title , employeeId FROM employees";

    if ($Result = $mysqli->query($sql)) {
        if (mysqli_num_rows($Result) > 0) {
            echo '<table class= "table table-striped" style ="width:75%; margin: 0 auto;" >
              <tr class="bg-info">
              <th>ID</th>
              <th>Employee Name</th>
              <th>Employee Job Title</th>
              <th>Operations</th>
              </tr>';

            while ($Row = $Result->fetch_row()) {
                echo '<tr>';
                echo "<th>$Row[3]</th>";
                echo "<th>$Row[0] $Row[1]</th>";
                echo "<th>$Row[2]</th>";
                echo "<th><a href='Delete.php?EmployeeID=$Row[3]'>$Delete_Icon</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <a href='Update_Form.php?EmployeeID=$Row[3]'>$Update_Icon</a>
                        </th>";
                echo "</tr>";
            }
            echo '</table>';
            echo '<h4 class="text-center">there are <span class="text-danger">( ' . mysqli_num_rows($Result) . ' )</span> results of this query !!!</h4>';
        } else {
            echo "<h1 class='text-center'>There is no Results for this Query !!!!</h1>";
        }

        $Result->free_result();
    }
    ?>
    <?php $mysqli->close() ?>
    <div class="text-center">
        <a href="New_Insert.php" class="btn btn-success btn-lg">Add New Employee</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>