<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
    include_once("db_connection.php");

    $EmployeeID = $_GET["EmployeeID"];

    $sql = "DELETE FROM employees WHERE EmployeeID = $EmployeeID";

    if ($mysqli->query($sql) === TRUE) {
        echo "<h3 class='text-center text-primary'>The Employee has been Deleted </h3>";
    } else {
        echo "<h3 class='text-center text-danger'>There is an error </h3>";
    }
    ?>
</head>

<body>
    <h4 class="text-center back"><a href='select.php'>Back to Employees List </a></h4>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</body>

</html>