<?php
	session_start();

	if(!isset($_SESSION['usr_id'])) {
		header("Location: index.php");
	}
	
	include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio | Panel de Control</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

</head>
<body style="padding-top: 70px">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Oftalmoluz</a>
				</div>
				<!--div class="collapse navbar-collapse" id="navbar1">
					<ul class="nav navbar-nav navbar-right">
						<?php if (isset($_SESSION['usr_id'])) { ?>
						<li><p class="navbar-text">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
						<li><a href="adminpanel.php">Reservas</a></li>
						<li><a href="logout.php">Salir</a></li>
						<?php } else { ?>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Registro</a></li>
						<?php } ?>
					</ul>
				</div-->
								
			</div><!-- /.container-fluid -->
		</nav>

		
		  <!--img src="http://www.grupocarvel.com/images/Bienvenidos.png" alt="" width="100%" style="padding-top: 20px"-->
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<form role="search">
					<div class="form-group center" style="text-align:center">
						<!--input type="text" class="form-control" placeholder="Search"-->
						<img src="https://oftalmoluz.com/junioryauricasa/img/logo-oftalmoluz.png" alt="" data-toggle='tooltip' data-placement="bottom" title='Oftalmoluz' style='width:100%;'>
						<br>
						<!--Usuario-->
						<div class="fb-follow" style='margin-top:7px'  data-placement="top" data-toggle='tooltip' title='Junior Yauricasa' data-href="https://www.facebook.com/JuniorYauricasa" data-layout="button" data-size="small" data-show-faces="false"></div>
					</div>
					<!-- Menu nav -->
					<div class="collapse navbar-collapse" id="navbar1">
						<ul class="nav menu">
							<?php if (isset($_SESSION['usr_id'])) { ?>
							<li>Hola
								<?php echo $_SESSION['usr_name']; ?>
							</li>
							<!--li>
								<a href="users.php">Users</a>
							</li>
							<li>
								<a href="logout.php">Salir</a>
							</li--->
							<?php } else { ?>
							<!--li>
								<a href="login.php">Login</a>
							</li>
							<li>
								<a href="register.php">Registro</a>
							</li-->
							<?php } ?>
						</ul>
					</div>
					<!-- Menu nav -->
				</form>

				<?php include("panellateral.php"); ?>
				
			</div>

			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main col-md-12">			
				<!--div class="row">
					<ol class="breadcrumb">
						<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="active">Registro de Mensaje</li>
					</ol>
				</div-->
				<!--div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">Registro producto</div>
							<div class="panel-body">
								<div class="col-md-6">
					                <form action="?action=registrar" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;" enctype="multipart/form-data">
					                    <input type="HIDDEN" name="intidproducto" value="" />
					                    <label for="">Producto</label>
					                    <input class="form-control" type="text" name="nvchproducto" value="" style="width:100%;" placeholder='Ingrese el nombre del producto' required/>

					                    <label for="">Descripcón</label>
					                    <input class="form-control" type="text" name="nvchdescripcion" value="" style="width:100%;" placeholder='Ingrese descripcion del producto' required/>

					                    <label for="">Distribuidor</label>
					                    <input class="form-control" type="text" name="nvchcantidad" value="" placeholder='Ingrese distribuidor' style="width:100%;" required/>
					                    <br>
										<button type="submit" class="btn btn-primary">Guardar</button>
										<button type="reset" class="btn btn-danger">Limpiar</button>
					                </form>
								</div>
							</div>
						</div>
					</div>
				</div-->


				<div class="col-md-12" id="frmActualizar" style="" >
					<div class="panel panel-default">
						<div class="panel-heading">
							Editar Registro 
							<small>
				<?php 

					$codigo = $_GET['codigo']; //verificación de codigo url
					$msg = '';

					if($codigo){
						echo $codigo;
						
						include ('credenciales.php');

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 

						$sql = "SELECT * FROM tb_categoria WHERE intidcategoria = $codigo";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        //$_SESSION['mensaje'] = $row['nvchmensaje'];

						    echo '
						        </small>
							</div>

							<div class="panel-body">
								<form action="" method="post">
								  <div class="form-group">
								    <!--label for="exampleInputEmail1">Ingrese Mensaje</label-->
								    <input type="text" class="form-control" id="mensaje" name="mensaje" aria-describedby="emailHelp" placeholder="Ingresar mensaje personalizado" value="'.$row['nvchcategoria'].'" required="true">
								    <small id="emailHelp" class="form-text text-muted">Este mensaje se desplazara horizontalmente debajo del banner del menu principal</small>
								    <br>
								    <small id="emailHelp" class="form-text text-muted">
								    '.$msg.'
								    </small>
								  </div>
								  <button type="submit" name="actualizar" class="btn btn-xs btn-info">Actualizar</button>
								  <a href="categorias.php" class="btn btn-xs btn-danger">Regresar</a>
								</form>
							</div>

							';

						    }
						} else {
						    echo " Sin resultados aún";
						}
						$conn->close();
					}
				?>
							
						</div>
					</div>
				</div>
			</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/bootstrap-table.js"></script>

		<script>
			!function ($) {
				$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
					$(this).find('em:first').toggleClass("glyphicon-minus");	  
				}); 
				$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
			}(window.jQuery);

			$(window).on('resize', function () {
			  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
			$(window).on('resize', function () {
			  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})
		</script>
			
		<script>
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
</body>


<!-- actualizar script -->
<?php
	if(isset($_POST['actualizar'])){
		
		include('credenciales.php'); //

		$mensaje = $_POST['mensaje'];
		$codigo = $_GET['codigo'];

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "UPDATE tb_categoria SET nvchcategoria='$mensaje' WHERE intidcategoria = ".$codigo."";

		if ($conn->query($sql) === TRUE) {
			
		    //$msg = "Registro actualizado exitosamente";
		    echo "
		    <script>
				alert('Registro Actualizado');
				
			</script>
			";
		    
		    //header("Location:categorias.php");

		} else {
		    echo "error actualizando el registro: " . $conn->error;
		}

		mysqli_close($conn);
	}else
	{
	}
?>
<!-- END actualizar script -->

</html>