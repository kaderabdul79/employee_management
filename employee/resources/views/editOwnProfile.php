<?php
session_start();
require_once('../../Models/db.php');
include('master.php');
include('header.php');
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
<?php 
include('footer.php');
?>