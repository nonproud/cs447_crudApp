<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "cs447_hw1";

	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		die('<script> aleart("Connection Failed: ' . $conn->connect_error );
		echo '") </script>';
	}
?>