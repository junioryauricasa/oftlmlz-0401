<?php 
	//conexion.php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_modular";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

/*
	//coneccion db
	$servername = "142.44.240.81";
	$username = "ene24ofd";
	$password = "q5U4slUIL3p2";
	$dbname = "ene24ofd_oftalmoluz_jy";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} else
	if($conn){
		echo 'coneccion correcta';
	}
*/	
?>