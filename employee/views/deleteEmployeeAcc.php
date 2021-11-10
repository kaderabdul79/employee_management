<?php
require_once('db.php');
$conn = getConnection();
$id = $_GET['id'];
$sql = "delete from users where id='$id'";
$result = mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql))
	{
        header('location: viewEmployees.php');
	}
	else
	{
        header('location: viewEmployees.php');
	}   