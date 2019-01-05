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


	$codigoregistro = $_GET['cod'];

	$sql = "SELECT * FROM tb_mensaje where intidmensaje = ".$codigoregistro."";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo '
	        <form action="insert-marke.php" method="POST">
				<input type="text" id="nvchmensaje" name="nvchmensaje" placeholder="mensaje del marque" value="'.$row["nvchmensaje"].'" required="">
				<input type="submit">
			</form>
			';
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();
?>