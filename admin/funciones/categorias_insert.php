<?php  
	include('../credenciales.php');
	$nvchcategoria = $_POST['categorias'];

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO tb_categoria (intidcategoria, nvchcategoria)
	VALUES (NULL, '$nvchcategoria')";

	if (mysqli_query($conn, $sql)) {
	    //script de registro
	    echo '
			<script>
			  var r = confirm("Registro Exitoso");
			  if (r == true) {
			    window.location.href = "../categorias_insert.php";
			  } else {
			    window.location.href = "../categorias.php";
			  }
			  document.getElementById("demo").innerHTML = txt;
			</script>
	    ';
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>