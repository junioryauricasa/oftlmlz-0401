<?php  
	include('../credenciales.php');
	$nvchmensaje = $_POST['mensaje'];

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO tb_mensaje (intidmensaje, nvchmensaje)
	VALUES (NULL, '$nvchmensaje')";

	if (mysqli_query($conn, $sql)) {
	    //script de registro
	    echo '
			<script>
			  var r = confirm("Registro Exitoso");
			  if (r == true) {
			    window.location.href = "../mensaje_insert.php";
			  } else {
			    window.location.href = "../mensaje_insert.php";
			  }
			  document.getElementById("demo").innerHTML = txt;
			</script>
	    ';
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>