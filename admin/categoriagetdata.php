<?php 
	include ('credenciales.php');

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
	        echo "
		        <tr data-value='".$row['intidcategoria']."'>
		        	<td>CAT".$row['intidcategoria']."</td>
		        	<td>".$row['nvchcategoria']."</td>
		        	<td>
		        		<a href='categorias_editar.php?codigo=".$row['intidcategoria']."' class='btn btn-info btn-xs'>Editar</a>
		        		<a href='#' data-value='".$row['intidcategoria']."' onclick='' id='btn-eliminar' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#myModal'>Eliminar</a>
		        	</td>
		        </tr>
	        ";
	    }
	} else {
	    echo "Sin resultados aun";
	}
	$conn->close();
?>


		<!-- Modal eliminar datos-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Confirmación</h4>
		      </div>
		      <div class="modal-body">
		        Esta seguro de Eliminar el registro?
		      </div>
		      <div class="modal-footer">
		        <!--button type="button" class="btn btn-xm btn-primary">Si, Eliminar</button-->
		        <a  class="btn btn-xm btn-primary" href="#" onclick="eliminarRegistro()">Si, Eliminar</a>
		        <button type="button" class="btn btn-xm btn-danger" data-dismiss="modal">No Estoy seguro</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- END Modal eliminar datos-->

		<script>
			function eliminarRegistro(cod){
				var cod;
				window.location.href = "categorias_eliminar.php?codigo="+cod+"";
			}
		</script>