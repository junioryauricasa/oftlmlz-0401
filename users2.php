<?php
	session_start();
	include_once 'dbconnect.php';

	//validar vizualización de esta interfaz
	if (isset($_SESSION['usr_id'])) 
	{ 
		$nombre = $_SESSION['usr_name'];
	} else { 
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administración de Usuarios | Panel de Control</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" style="">Hoteltopia</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
				<li><a href="users.php">Users</a></li>
				<li><a href="adminpanel.php">Reservas</a></li>
				<li><a href="logout.php">Salir</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Registro</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
  <h2>Usuarios</h2>
  <!--p>Te mostramos las reservas hechas hasta la fecha de hoy:</p-->


  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombres</th>
        <th>Correo</th>
        <th>Estado</th>
        <th>Opción</th>
      </tr>
    </thead>
    <tbody>
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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row['estado'] == 0){
    		$row['estado'] = '<i class="btn btn-danger btn-xs"><b>Deshabilitado</b></i>';
    	}else
    	if($row['estado'] == 1){
    	    $row['estado'] = '<i class="btn btn-success btn-xs"><b>Deshabilitado</b></i>';
    	}

        echo "
	        <tr>
	        	<td>".$row['id']."</td>
	        	<td>".$row['name']."</td>
	        	<td>".$row['email']."</td>
	        	<td>".$row['estado']."</td>
	        	<td>
	        		<a href='habilitarruser.php?codigo=".$row['id']."' class='btn btn-success btn-xs'>Habilitar</a>
	        		<a href='deshabilitarruser.php?codigo=".$row['id']."' class='btn btn-danger btn-xs'>Deshabilitar</a>
	        		<a href='eliminaruser.php?codigo=".$row['id']."' class='btn btn-default btn-xs'>Eliminar</a>
	        	</td>
	        </tr>
        ";
    }
} else {
    echo "Sin resultados aun";
}
$conn->close();

?>

</tbody>

  </table>
  </div>
</div>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>