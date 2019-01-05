<!-- Select mensajes marque -->
<?php
	//select-convenio.php
	
	
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

	$sql = "SELECT * FROM tb_convenios";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       	echo '
	       	<div class="col-md-4" id="mision">
				<div class="card">
				  <img src="'.$row["nvchimg"].'" alt="Avatar" style="width:100%">
				  <div class="aligncenter">
				  	<br>
				    <h5>'.$row["nvchconvenios"].'</h5> 
				    <p>
						<a href="#" class="btn btn-danger"> Ver convenio</a>
					</p>
				  </div>
				</div>
			</div>
	       	';
	    }
	} else {
	    echo "sin resultados por el momento";
	}

	$conn->close();
?>
<!-- END Select mensajes marque -->