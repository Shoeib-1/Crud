<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <?php
        include_once("db_connection.php");

        $EmployeeID = $_GET["EmployeeID"];

        $sql = "SELECT firstname, lastname, title, employeesIsActive FROM employees WHERE EmployeeID=$EmployeeID";

        if ($result = $mysqli -> query($sql)) {
            while ($row = $result -> fetch_row()) {
                $firstname = $row[0];
                $lastname = $row[1];
                $title = $row[2];
                $employeesIsActive = $row[3];
            }
        }
        if($employeesIsActive == 1){
            $employeesIsActive = "checked";
        }
        else{
            $employeesIsActive = "";
        }
    ?>

</head>
<body>
    <h3 class="text-center">Add New Employee Form</h3>

    <form method="post" enctype="multipart/form-data" action="Update_logic.php" style="width: 75%; margin:0 auto; padding: 25px;">

        <input value="<?php echo $EmployeeID; ?>" name="EmployeeID" type="hidden" />

        <div class="row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
            <div class="col-sm-10">
                <input value="<?php echo $firstname; ?>" name="FirstName" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="First Name">
            </div>
        </div>

        <div class="row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
            <div class="col-sm-10">
                <input value="<?php echo $lastname; ?>" name="LastName" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Last Name">
            </div>
        </div>

        <div class="row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Job Title</label>
            <div class="col-sm-10">
                <input value="<?php echo $title; ?>" name="Title" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Job Title">
            </div>
        </div>

        <div class="form-check form-switch row px-5">
            <input name="employeesIsActive" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" <?php echo $employeesIsActive; ?> >
            <label class="form-check-label" for="flexSwitchCheckChecked">Employee is Active</label>
        </div>

        <div class="row">
            <button type="submit" class="btn btn-primary mb-3">Update</button>
        </div>
    </form>    
        
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>