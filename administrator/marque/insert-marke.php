<?php
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

	$mensajeMarque = $_POST['nvchmensaje']; //mensaje marque

	$sql = "INSERT INTO tb_mensaje (nvchmensaje) VALUES ('".$mensajeMarque."')";

	if ($conn->query($sql) === TRUE) {
	    echo "Registrado exitosamente";
	    echo "<br><a href='form_registrar-mensaje-marke.php'> formulario</a>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>