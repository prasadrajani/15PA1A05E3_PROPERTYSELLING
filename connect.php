<?php
	$server ="localhost";
	$username="root";
	$password="";
	$db="House_sale";
	$conn=mysqli_connect($server,$username,$password) or die("connection failed: ".mysqli_connect());
	mysqli_select_db($conn,$db);
	//mysqli_connect();
	?>
