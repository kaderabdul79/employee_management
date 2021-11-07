<?php include('master.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Hello <?php session_start(); echo $_SESSION['username']; ?></h2>
                <button type="button" class="btn btn-info"><a href="viewProfile.php">View Profile</a></button>
                <button type="button" class="btn btn-info"><a href="viewEmployees.php">View Employees</a></button>
            </div>
        </div>
    </div>
    
</body>
</html>