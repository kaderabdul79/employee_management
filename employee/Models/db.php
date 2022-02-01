<?php

	$dbuser = 'root';
	$dbpass = '';
	$host 	= 'localhost';
	$dbname	= 'employee_management';
	
	// test db connection
    // if($conn = mysqli_connect($host, $dbuser, $dbpass, $dbname)){
    //     echo "success";
    // }
    
	function getConnection(){
		global $dbname, $dbpass, $dbuser, $host;
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

?>