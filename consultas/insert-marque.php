<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_modular";
	

/*
	//coneccion db
	$servername = "142.44.240.81";
	$username = "ene24ofd";
	$password = "q5U4slUIL3p2";
	$dbname = "ene24ofd_oftalmoluz_jy";
*/

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO tb_mensaje (nvchmensaje)
	VALUES ('a cirugía refractiva es la solución definitiva para diversas patologías, denominadas defectos refractivos (miopía, hipermetropía y astigmatismo). La cirugía refractiva permite conseguir una correcta visión sin necesidad de gafas o lentes de contacto.";

	if ($conn->query($sql) === TRUE) {
	    echo "Registrado exitosamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>