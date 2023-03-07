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
    $FirstName = $_GET["FirstName"];
    $LastName = $_GET["LastName"];
    $Title  = $_GET['Title'];
    if (isset($_GET['employeesIsActive']) === True) {
        $employeesIsActive = 1;
    } else {
        $employeesIsActive = 0;
    }

    $sql  = "INSERT INTO employees(LastName , FirstName , Title , employeesIsActive) VALUE ('$LastName ', '$FirstName' , '$Title' , $employeesIsActive )";

    if ($mysqli -> query($sql) === True) {
        echo "<h4 class='text-center'>A new Employee has been Added !!!!!</h4>";
    }
    ?>
</head>

<body>
    <h4 class="text-center back"><a href="select.php"> Back To Employees List </a></h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>