<?php
	include('credenciales.php');

	$mensaje = $_POST['mensaje'];

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO tb_mensaje (intidmensaje, nvchmensaje)
	VALUES (NULL, '$mensaje')";

	if (mysqli_query($conn, $sql)) {
	    echo "Registro exitoso";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>