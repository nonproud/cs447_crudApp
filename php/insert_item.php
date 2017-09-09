<?php
	include("conn.php");

	$pName = $_REQUEST['pName'];
	$pPrice = $_REQUEST['pPrice'];
	$pDescribtion = $_REQUEST['pDescription'];
	$pAmount = $_REQUEST['pAmount'];
	$pId = '';

	// insert new item
	$sql_insert = 'INSERT INTO `goods`(`Name`, `Price`, `Describtion`, `Amount`) VALUES ("'.mysqli_real_escape_string($conn, $pName).'",
	"'.mysqli_real_escape_string($conn, $pPrice).'","'.mysqli_real_escape_string($conn, $pDescribtion).'",
	"'.mysqli_real_escape_string($conn, $pAmount).'");';
	$query = mysqli_query($conn, $sql_insert);
	if(!$query){
		echo "fail";
	}else{
		$pId = $conn->insert_id;
		echo '<script> alert("Add new item successfully!"); </script>';
	}

	// upload image
	$target_dir = "/ppstorage/goods_img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"][$pId]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
    	if($check !== false) {
        	echo "File is an image - " . $check["mime"] . ".";
        	$uploadOk = 1;
    	} else {
        	echo "File is not an image.";
        $uploadOk = 0;
    }
}
//window.location.replace("/ppstorage/home.php");
?>