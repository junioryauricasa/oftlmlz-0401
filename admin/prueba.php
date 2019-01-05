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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventario - 'El Shunior'</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
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
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group center" style="text-align:center">
				<!--input type="text" class="form-control" placeholder="Search"-->
				<img src="junior.png" alt="" data-toggle='tooltip' data-placement="bottom" title='Junior Yauricasa' style='width:150px; height: 150px; border-radius:50%'>
				<br>
				<!--Usuario-->
				<div class="fb-follow" style='margin-top:7px'  data-placement="top" data-toggle='tooltip' title='Junior Yauricasa' data-href="https://www.facebook.com/JuniorYauricasa" data-layout="button" data-size="small" data-show-faces="false"></div>
			</div>
		</form>
		<ul class="nav menu">
			<li class="">
				<a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>Registrar Producto</a>
			</li>
			<li>
				<a href="pedido.php"><span class="glyphicon glyphicon-list-alt"></span>Registrar Pedido</a>
			</li>
			<li>
				<a href="ingreso.php"><span class="glyphicon glyphicon-list-alt"></span>Registrar Ingreso</a>
			</li>
			<li>
				<a href="reportepdf.php"><span class="glyphicon glyphicon-download-alt"></span>Lista Productos</a>
			</li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
					<li class="active">Registro de Productos</li>
				</ol>
			</div><!--/.row-->
			<br>
			
			<!--registro producto form-->
			<div class="row">
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
				</div><!-- /.col-->
			</div><!-- /.row -->
			<!--end registro form-->

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Productos en almancen</div>
						<div class="panel-body">
							<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
								    <tr>
								        <th>Codigo Prod.</th>
								        <th style="text-transform: uppercase">Producto</th>
								        <th style="text-transform: uppercase">Descripción</th>
								        <th style="text-transform: uppercase">Distribuidor</th>
								        <th style="text-transform: uppercase">Opciones</th>
								    </tr>
							    </thead>
											                        <tr style="text-transform: uppercase">
			                            <td>
			                                PROD00025			                            </td>
			                            <td>
			                                producto 1			                            </td>
			                            <td>
			                                descriptcion producto 1			                            </td>
			                            <td>
			                                distribuidor producto 1			                            </td>
			                            <td>
											<a href="?action=editar&intidproducto=25" style="background-color: green; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Editar Producto"> <span class='glyphicon glyphicon-pencil'></span></a>
			                                <a href="?action=eliminar&intidproducto=25" style="background-color: red; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Eliminar Producto"><span class="glyphicon glyphicon-trash"></span></a>
			                            </td>
			                        </tr>
			                    			                        <tr style="text-transform: uppercase">
			                            <td>
			                                PROD00026			                            </td>
			                            <td>
			                                producto 2			                            </td>
			                            <td>
			                                descriptcion producto 2			                            </td>
			                            <td>
			                                distribuidor producto 2			                            </td>
			                            <td>
											<a href="?action=editar&intidproducto=26" style="background-color: green; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Editar Producto"> <span class='glyphicon glyphicon-pencil'></span></a>
			                                <a href="?action=eliminar&intidproducto=26" style="background-color: red; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Eliminar Producto"><span class="glyphicon glyphicon-trash"></span></a>
			                            </td>
			                        </tr>
			                    			                        <tr style="text-transform: uppercase">
			                            <td>
			                                PROD00027			                            </td>
			                            <td>
			                                lavador de carro			                            </td>
			                            <td>
			                                potente lavador de carros - efectivo para todo tipo de superficie			                            </td>
			                            <td>
			                                sapolio			                            </td>
			                            <td>
											<a href="?action=editar&intidproducto=27" style="background-color: green; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Editar Producto"> <span class='glyphicon glyphicon-pencil'></span></a>
			                                <a href="?action=eliminar&intidproducto=27" style="background-color: red; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Eliminar Producto"><span class="glyphicon glyphicon-trash"></span></a>
			                            </td>
			                        </tr>
			                    							</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->	
                <form action="?action=registrar" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;" enctype="multipart/form-data">
                    <input type="hidden" name="intidproducto" value="" />
                </form> 
		</form>
	</div><!--/.main-->


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

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</body>

</html>
