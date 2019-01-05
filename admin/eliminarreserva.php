<?php
$cod = $_GET['codigo'];

include ("credenciales.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM tb_rsvhabitacion WHERE intidreshabitacion=$cod";

if ($conn->query($sql) === TRUE) {
    //echo "eliminado exitosamente";
    echo '
		<script>
			function myFunction() {
			    confirm("Registro eliminado: '.$cod.'");
			}
		</script>
	';
    header("Location: adminpanel.php");
} else {
    echo "Error eliminando registro: " . $conn->error;
}

$conn->close();
?>