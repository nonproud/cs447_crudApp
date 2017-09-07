<?php
session_start();
include("conn.php");

$id = $_POST['id'];
$pass = $_POST['pass'];
$date = "23";

$sql_login = 'SELECT * FROM users WHERE ID = "'.mysqli_real_escape_string($conn, $id).'" AND Password = "'.mysqli_real_escape_string($conn, $pass).'" ;';
//$sql_update_lastlogin = 'UPDATE `users` SET `Last_login`= "'.mysqli_real_escape_string($conn, $date).'" WHERE 1';

$query = mysqli_query($conn, $sql_login);
$row = mysqli_fetch_array($query);

if($row){
	$query_up = mysqli_query($conn, $sql_update_lastlogin);
	$rowupdate = mysqli_fetch_array($query_up);
//	$_SESSION['id'] = $rowupdate['ID'];
	$_SESSION['fname'] = $row['Firstname'];
	$_SESSION['lname'] = $row['Lastname'];
	$_SESSION['address'] = $row['Address'];
	$_SESSION['lastlogin'] = $row['Last_login'];
	$_SESSION['img'] = $row['Image'];
	session_write_close();
	printf('<script> alert("Welcome %s %s!"); window.location.replace("/ppstorage/home.php");</script>',$_SESSION['fname'],$_SESSION['lname']);
}else{
	echo '<script> alert("Something went wrong!"); window.location.replace("/ppstorage"); </script>';
}

$conn->close();


?>