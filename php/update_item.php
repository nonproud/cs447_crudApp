<?php
	include("conn.php");

	$pId = $_REQUEST['id'];
	$pName = $_REQUEST['pName'];
	$pPrice = $_REQUEST['pPrice'];
	$pDescribtion = $_REQUEST['pDescription'];
	$pAmount = $_REQUEST['pAmount'];

	// insert new item
	$sql_update = 'UPDATE `goods` SET `Name`= "'.mysqli_real_escape_string($conn, $pName).'",`Price`= "'.mysqli_real_escape_string($conn, $pPrice).'",`Describtion`= "'.mysqli_real_escape_string($conn, $pDescribtion).'",`Amount`="'.mysqli_real_escape_string($conn, $pAmount).'" WHERE ID = "'.mysqli_real_escape_string($conn, $pId).'";';

	'INSERT INTO `goods`(`Name`, `Price`, `Describtion`, `Amount`) VALUES (,
	,,
	);';
	$query = mysqli_query($conn, $sql_update);
	if(!$query){
		echo "fail";
	}else{
		//$pId = $conn->insert_id;
		echo '<script> alert("Uptate item successfully!");
		window.location.replace("/ppstorage/home.php"); </script>';
	}

// 	// upload image
// 	$target_dir = "/ppstorage/goods_img/";
// 	$target_file = $target_dir . basename($_FILES["fileToUpload"][$pId]);
// 	$uploadOk = 1;
// 	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// 	// Check if image file is a actual image or fake image
// 	if(isset($_POST["submit"])) {
//     	if($check !== false) {
//         	echo "File is an image - " . $check["mime"] . ".";
//         	$uploadOk = 1;
//     	} else {
//         	echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// //window.location.replace("/ppstorage/home.php");
?>