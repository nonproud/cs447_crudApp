<?php
	include("insert_item");

	$pName = $_REQUEST['pName'];
	$pPrice = $_REQUEST['pPrice'];
	$pDescribtion = $_REQUEST['pDescribtion'];
	$pAmount = $_REQUEST['pAmount'];
	
	$sql = "INSERT INTO `goods`(`ID`, `Name`, `Price`, `Describtion`, `Amount`) VALUES (,,,,);";

?>