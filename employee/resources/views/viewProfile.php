<?php
session_start();
require_once('../../Models/auth.php');
include('master.php');
include('header.php');

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$info = commonForAllUser($username,$password);
$row = viewProfile($info['id'])
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
                 <button type="button" class="btn btn-info"><a href="detailsUserProfile.php">View Details</a></button>
                 <button type="button" class="btn btn-info"><a href="editOwnProfile.php?id=<?= $row['id']; ?>">Update Profile</a></button>
                 <button type="button" class="btn btn-danger"><a href="deleteMyAcc.php?id=<?= $row['id']; ?>">Delete Account</a></button>
             </td>
             <td>
        </tr>
  </tbody>
</table>
</div>
</div>
</div>
<?php include('footer.php'); ?>