<!-- Select mensajes marque -->
<?php
	//select-cirugias.php
	
	include ("admin/credenciales.php");

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

	$sql = "SELECT * FROM tb_categoria";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       	echo '
				<li>
					<i class="icon-angle-right"></i>
					<a href="#keysrch?'.$row["nvchcategoria"].'">'.$row["nvchcategoria"].'</a>
					<!--span> (11)</span-->
				</li>
	       	';
	    }
	} else {
	    echo "sin resultados por el momento";
	}

	$conn->close();
?>
<!-- END Select mensajes marque -->