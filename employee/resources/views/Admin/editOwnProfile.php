<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sidebars · Bootstrap v5.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

<meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
<main>

<div class="d-flex flex-shrink-0 p-3 text-black bg-white" style="width: 100%;height: 660px">
  <!-- sidabar start -->
  <?php include 'sidebar.php'; ?>
  <!-- sidebar end -->

  <!-- main body start -->
  <div class="d-flex flex-column p-3" id="showallForm" style="">
  <?php
session_start();
require_once('../../../Models/db.php');
include('../master.php');
$id = $_GET['id'];
$conn = getConnection();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$accounttype = $_SESSION['accounttype'];
$sql = "select * from users where username='$username' and password='$password' and accounttype='$accounttype'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Edit Profile</h3>
<form method="POST" action="../../Controllers/updateOwnProfile.php?id=<?= $id ?>" enctype="multipart/form-data">
     <div class="form-group">
         <label for="username">Username</label>
         <input type="text" class="form-control" placeholder="Username" name="username" value=<?= $row['username']; ?>>
      </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" value=<?= $row['password']; ?> id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value=<?= $row['email']; ?> aria-describedby="emailHelp" placeholder="Enter email">
  </div>
<!-- dropdown for department -->
  <br><div class="form-group col-md-8">
      <select id="inputState" class="form-control" name="department">
        <!-- value=<?= $row['department']; ?> -->
            <option <?= $row['department']; ?> selected ><?= $row['department']; ?></option>
            <option value="account">Account</option>
            <option value="management">Management</option>
            <option value="finance">Finance</option>
      </select>
    </div><br>
<!-- dropdown for department end -->
    Accounttype <div class="form-check">
            <input class="form-check-input" type="radio" name="accounttype" value="employee" id="Radio1">
            <label class="form-check-label" for="Radio1">
                <?= ($row['accounttype'] == 'employee') ?
                '<div class="disabled">
              <input class="form-check-input" type="radio" name="accounttype" id="exampleRadios3" value="admin" disabled>
              <label class="form-check-label" for="exampleRadios3">Admin</label>
            </div>'
                : '<input class="form-check-input" type="radio" name="accounttype" value="employee" id="Radio2">
            <label class="form-check-label" for="Radio2">
                Employee
            </label>' ?>
            </label><br>
           
            <!-- <div class="disabled">
              <input class="form-check-input" type="radio" name="accounttype" id="exampleRadios3" value="admin" disabled>
              <label class="form-check-label" for="exampleRadios3">Admin</label>
            </div> -->
    </div>
  <!-- end radio button -->
  <div class="form-group">
            Upload Picture <br><input type="file" accept="image/png, image/jpeg" name="picture" id="picture" value="<?= $row['picture']; ?>">
    </div><br>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Confirm to Update Profile?</label>
  </div>
  <input type="submit" name="EditProfile" value="Edit Profile">
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
</div></div></div><br>

   </div>
  <!-- main body end -->
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="sidebars.js"></script>
<script src="myscript.js"></script>
  </body>
</html>
<?php include 'dashboard.php'; ?>

