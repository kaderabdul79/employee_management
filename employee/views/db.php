<?php

	$dbuser = 'root';
	$dbpass = '';
	$host 	= 'localhost';
	$dbname	= 'employeemanagement';

    // if($conn = mysqli_connect($host, $dbuser, $dbpass, $dbname)){
    //     echo "success";
    // }
    
	function getConnection(){

		global $dbname, $dbpass, $dbuser, $host;
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

?>