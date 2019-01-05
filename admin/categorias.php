<?php
	session_start();
	include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Categorías | Panel de Control</title>
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
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a href="categorias_insert.php" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-plus"></span>
								Crear Categoria
							</a>
							<a href="#" class="btn btn-xs btn-default" onclick="loadDataCategoria()" >
								<span class="glyphicon glyphicon-refresh"></span>
								Refrescar Tabla
							</a>

							<!-- Confirmar Eliminar Modal? -->
							<!--button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
							  Launch demo modal
							</button-->

						</div>
					</div>
				</div>
				<div class="col-md-12"  id="">

					<div class="panel panel-default">
						<div class="panel-heading">
							Lista de Categorías
						</div>
						<div class="panel-body">

							<!-- table -->
							<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
								    <tr>
								        <th>Cod</th>
								        <th style="text-transform: uppercase">Categoria</th>
								        <th style="text-transform: uppercase">Opciones</th>
								    </tr>
							    </thead>
							    <tbody id="dataCategorias" style="transition: all 1s">

								<?php 
									include ('categoriagetdata.php');
								?>

								</tbody>
							</table>
							<!-- END table -->

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

		<script>
		    // load data
		    function loadDataCategoria() {
		      var xhttp = new XMLHttpRequest();
		      xhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		        	document.getElementById("dataCategorias").innerHTML = this.responseText;
		        }
		      };
		      xhttp.open("GET", "categoriagetdata.php", true);
		      xhttp.send();

		    }
		</script>

</body>

</html>