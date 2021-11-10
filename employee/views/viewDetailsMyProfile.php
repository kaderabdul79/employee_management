
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
<!-- <?php 
$targetDir = "../Resources/picture/";
 echo $targetDir.$row['picture']; ?> -->
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $row['picture']; ?>" width="250" height="350" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">My Profile</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Username </b>: <?= $row['username']; ?></li>
    <li class="list-group-item"><b>Department </b> :<?= $row['department']; ?></li>
    <li class="list-group-item"><b>Accounttype </b> :<?= $row['accounttype']; ?></li>
    <li class="list-group-item"><b>Email </b> : <?= $row['email']; ?></li>
    <li class="list-group-item"><b>Password</b> :<?= $row['password']; ?></li>
  </ul>
  <div class="card-body">
    <button type="button" class="btn btn-info"><a href='editOwnProfile.php?id=<?= $row['id']; ?>'>Edit Profile</a></button><br><br>
    <button type="button" class="btn btn-info"><a href="viewOwnProfile.php">Download Salary File</a></button>
  </div>
</div><style>
    a{
        color: #fff;
    }
</style>
<?php include('footer.php'); ?>