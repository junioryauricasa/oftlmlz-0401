<?php
	session_start();
	include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Oftalmoluz | Panel de Control</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	
	<!-- datatable -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

</head>
<body>

<!--nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" style="font-family: 'Lobster', cursive;">Oftalmoluz</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Registro</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav-->

<?php include("_include/header.php"); ?>


<div class="container" style="margin-top: 70px">

  <!--Componente principal de un mensaje de primario o llamado a la acción -->
  <!--div class="jumbotron">
    <h1>Administración</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis natus quo tempora ullam perferendis eligendi beatae repellat similique sed dolorum possimus quia magnam tenetur fugit est ipsa, quas. Voluptatibus, magni.</p>
  </div-->

  <div class="row">
  	<div class="col-md-3">
  		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam officiis, cum illum exercitationem. Voluptate aperiam eaque tempora praesentium rerum, sunt nam blanditiis qui sed molestiae harum accusantium doloribus rem assumenda.
  	</div>
  	<div class="col-md-9">
  		<div class="panel panel-default">
			<div class="panel-heading">Registro producto</div>
				<div class="panel-body">
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
		                                PROD000
		                            </td>
		                            <td>
		                                producto 1
		                            </td>
		                            <td>
		                                descripcion 1
		                            </td>
		                            <td>
		                                12
		                            </td>
		                            <td>
										<a href="" style="background-color: green; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Editar Producto"> <span class='glyphicon glyphicon-pencil'></span></a>
		                                <a href="" style="background-color: red; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Eliminar Producto"><span class="glyphicon glyphicon-trash"></span></a>
		                            </td>
		                        </tr>
		                        <tr style="text-transform: uppercase">
		                            <td>
		                                PROD000
		                            </td>
		                            <td>
		                                producto 1
		                            </td>
		                            <td>
		                                descripcion 1
		                            </td>
		                            <td>
		                                12
		                            </td>
		                            <td>
										<a href="" style="background-color: green; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Editar Producto"> <span class='glyphicon glyphicon-pencil'></span></a>
		                                <a href="" style="background-color: red; padding: 5px; border-radius: 5px;color: white; font-size:12px" data-toggle="tooltip" title="Eliminar Producto"><span class="glyphicon glyphicon-trash"></span></a>
		                            </td>
		                        </tr>
						</table>
					</div>
				</div>
			</div>
		</div>
    </table>
  	</div>
  </div>

</div>

<!-- Modal anuncios-->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Importante</h4>
	    </div>
	    <div class="modal-body">
	      <p>Some text in the modal.</p>
	    </div>
	    <!--div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div-->
	  </div>
	</div>
</div>
<!-- END Modal anuncios-->

<!-- Js -->
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

    // datatable
    $(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>


<!-- table -->
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