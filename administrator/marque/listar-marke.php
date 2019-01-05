<table>
  <tr>
    <th>Id</th>
    <th>Mensaje</th>
    <th>Opcion</th>
  </tr>

<!-- Select mensajes marque -->
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

	$sql = "SELECT * FROM tb_mensaje";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "
				  <tr>
				    <th>".$row["intidmensaje"]."</th>
				    <th>".$row["nvchmensaje"]."</th> 
				    <th>
				    	<a href='editar-marque.php?cod=".$row["intidmensaje"]."'>Editar</a> 
				    	|| 
				    	<a href='eliminar-marque.php?cod=".$row["intidmensaje"]."'>eliminar</a></th>
				  </tr>
	        ";
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();
?>
<!-- END Select mensajes marque -->
  
</table>