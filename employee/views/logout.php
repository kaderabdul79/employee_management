<?php

	session_start();
	if($_SESSION['flag']){
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['accounttype']);
	}
	
	header('location: signin.php');

?>