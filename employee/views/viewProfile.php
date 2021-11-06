<?php
session_start();
require_once('db.php');
include('master.php');
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
                <h2>Username : <?= $row['username']; ?></h2>
                <h2>Department : <?= $row['department']; ?></h2>
                <h2>Accounttype : <?= $row['accounttype']; ?></h2>
                
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-info"><a href="viewProfile.php">Update Profile</a></button>
                <button type="button" class="btn btn-danger"><a href="deleteAccount.php">Delete Account</a></button>
                
            </div>
        </div>
    </div>