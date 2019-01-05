<?php 
	//mensaje_eliminar.php
	$cod = $_GET['codigo'];

	include ("credenciales.php");

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	// sql to delete a record
	$sql = "DELETE FROM tb_categoria WHERE intidcategoria=$cod";

	if ($conn->query($sql) === TRUE) {
	    header("Location: categorias.php"); // redireccionamiento
	} else {
	    echo "Error eliminando registro: " . $conn->error;
	}

	$conn->close();
?>