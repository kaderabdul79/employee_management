<?php

	session_start();
	if($_SESSION['flag']){
		// unset($_SESSION['username']);
		// unset($_SESSION['password']);
		// unset($_SESSION['accounttype']);
		session_destroy();
		setcookie('flag', 'true', time()-10, '/');
		setcookie('username', $_SESSION['username'], time()-10, '/');
	}
	
	header('location: ../resources/views/signin.php');

?>