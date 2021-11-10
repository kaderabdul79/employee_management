<?php
require_once('db.php');
$id = $_GET['id'];
$conn = getConnection();
$sql = "delete from users where id='$id'";
$result = mysqli_query($conn,$sql);
if($result)
	{
        header('location: signup.php');
	}
	else
	{
        header('location: viewEmployees.php?Not deleted your info');
	}    
