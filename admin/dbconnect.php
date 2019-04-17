<?php
	//Conneccion a la base de dato

	/*
	$servername = "142.44.240.81";
	$username = "ene24ofd";
	$password = "q5U4slUIL3p2";
	$dbname = "ene24ofd_oftalmoluz_jy";
	*/
	include ("credenciales.php");
	//$con = mysqli_connect("142.44.240.81", "ene24ofd", "q5U4slUIL3p2", "ene24ofd_oftalmoluz_jy") or die("Error " . mysqli_error($con));
	$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($con));
?>