<?php
session_start();
require_once('db.php');
include('master.php');
include('header.php');
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
            <div class="col-md-12">
                <table class="table table-bordered">
  <thead>
    <tr>
            <th>Username</th>
            <th>Department</th>
            <th>Accounttype</th>
            <th>Action</th>
        </tr>
    <tr>
  </thead>
  <tbody>
    <tr>
             <td><?= $row['username']; ?></td>
             <td><?= $row['department']; ?></td>
             <td><?= $row['accounttype']; ?></td>
             <td>
                 <button type="button" class="btn btn-info"><a href="viewOwnProfile.php">View Details</a></button>
                 <button type="button" class="btn btn-info"><a href="viewProfile.php">Update Profile</a></button>
                 <button type="button" class="btn btn-danger"><a href="deleteAccount.php">Delete Account</a></button>
             </td>
             <td>
        </tr>
  </tbody>
</table>
</div>
</div>
</div>
<?php include('footer.php'); ?>