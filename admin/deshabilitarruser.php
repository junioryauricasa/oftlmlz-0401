<?php
$cod = $_GET['codigo'];

/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_modular";
*/

include ("credenciales.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE users SET estado=0 WHERE id=$cod";

if ($conn->query($sql) === TRUE) {
    //echo "eliminado exitosamente";
    echo '
		<script>
			function myFunction() {
			    confirm("Registro Actualizado: '.$cod.'");
			}
		</script>
	';
    header("Location: users.php");
} else {
    echo "Error actualizando el registro: " . $conn->error;
}

$conn->close();
?>