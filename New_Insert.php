<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
     <h3 class="text-center">Add New employee</h3>
      
    <form action="logic_new_insert.php" style="width: 75%; margin:0 auto; padding: 25px;">
        <div class="row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
            <div class="col-sm-10">
                <input name="FirstName" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="First Name">
            </div>
        </div>

        <div class="row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
            <div class="col-sm-10">
                <input name="LastName" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Last Name">
            </div>
        </div>

        <div class="row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Job Title</label>
            <div class="col-sm-10">
                <input name="Title" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Job Title">
            </div>
        </div>

        <div class="form-check form-switch row px-5">
            <input name="employeesIsActive" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Employee is Active</label>
        </div>

        <div class="row">
            <button type="submit" class="btn btn-primary mb-3">Add New</button>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>