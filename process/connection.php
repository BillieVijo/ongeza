<?php 
	$db = "ongeza_test";
	$server = "localhost";
	$user = "root";
	$password = "";

	$con = mysqli_connect($server,$user,$password,$db);


	if(!$con){
		echo "Connection fail ". mysqli_error($con);
	}

 ?>