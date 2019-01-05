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
	<title>Inicio | Panel de Control</title>
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
			<a class="navbar-brand" href="index.php" style="">Oftalmoluz</a>
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
  <h2>Reservas</h2>
  <p>Te mostramos las reservas hechas hasta la fecha de hoy:</p>


  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Tipo Tarjeta</th>
        <th>Número Tarjeta</th>
        <th>Caduca</th>
        <th>Código</th>
        <th>Telefono</th>
        <th>Solicitud</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <!--tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr-->
    

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

$sql = "SELECT * FROM tb_rsvhabitacion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row['inttipotarjeta'] == 1){
    		$row['inttipotarjeta'] = "Visa";
    	}else
    	if($row['inttipotarjeta'] == 2){
    	    $row['inttipotarjeta'] = "Master Card";
    	}else
    	if($row['inttipotarjeta'] == 3){
    	    $row['inttipotarjeta'] = "Diners Club";
    	}

        echo "
	        <tr>
	        	<td>".$row['intidreshabitacion']."</td>
	        	<td>".$row['nvchnombre']."</td>
	        	<td>".$row['nvchapellido']."</td>
	        	<td>".$row['inttipotarjeta']."</td>
	        	<td>".$row['numtarjeta']."</td>
	        	<td>".$row['mescaduca']."/".$row['aniocaduca']."</td>
	        	<td>".$row['codigocvc']."</td>
	        	<td>".$row['telf']."</td>
	        	<td>".$row['solicitud']."</td>
	        	<td>
	        		<a href='https://api.whatsapp.com/send?phone=51".$row['telf']."&text=Hola ".$row['nvchnombre']." ".$row['nvchapellido'].", hemos recibido tu solicitud de reserva y dejanos decirte que esta aprobada' target='_blank' class='btn btn-success btn-xs'>Aceptar</a>
	        		<a href='https://api.whatsapp.com/send?phone=51".$row['telf']."&text=Hola ".$row['nvchnombre']." ".$row['nvchapellido'].", hemos recibido tu solicitud de reserva, la cual no pudo ser aprobada' target='_blank' class='btn btn-danger btn-xs'>Rechazar</a>
	        		<a href='eliminarreserva.php?codigo=".$row['intidreshabitacion']."' class='btn btn-default btn-xs'>Eliminar</a>
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