<?php

	$dbuser = 'root';
	$dbpass = '';
	$host 	= 'localhost';
	$dbname	= 'employee_management';

    // if($conn = mysqli_connect($host, $dbuser, $dbpass, $dbname)){
    //     echo "success";
    // }
    
	function getConnection(){

		global $dbname, $dbpass, $dbuser, $host;
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

?>