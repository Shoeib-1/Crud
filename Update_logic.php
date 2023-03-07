<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php 
      include_once("db_connection.php");

      $EmployeeID = $_POST["EmployeeID"];
      $FirstName = $_POST["FirstName"];
      $LastName = $_POST["LastName"];
      $Title = $_POST["Title"];
      if(isset($_POST["employeesIsActive"]) === TRUE){
          $employeesIsActive = 1;
      }
      else{
          $employeesIsActive = 0;
      }
        
      $sql = "UPDATE employees SET FirstName='$FirstName', LastName='$LastName', Title='$Title', employeesIsActive=$employeesIsActive
      WHERE EmployeeID=$EmployeeID";

      if($mysqli -> query("$sql") === True){
        echo "<h3 class='text-center text-primary'>The Employee DATA has been Updated</h3>";

      }else{
        echo "<h3 class='text-center text-danger'>There is an error</h3>";
        echo $mysqli -> error;
      }


    ?>

</head>
<body>
<h4 class="text-center  back"><a href='select.php'>Back to Employees List </a></h4>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>    
</body>
</html>