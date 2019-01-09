<?php 
	include ('credenciales.php');

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM tb_blog inner join tb_categoria on tb_blog.intidcategoria = tb_categoria.intidcategoria";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	if($row['btestado'] == 0){
	    		$row['btestado'] = "deshabilitado";
	    	}else
	    	if($row['btestado'] == 1){
	    		$row['btestado'] = "Habilitado";
	    	}
	        echo "
		        <tr>
		        	<td>CONT".$row['indidblog']."</td>
		        	<td><b>".$row['nvchtituloblog']."</b><br><p class='truncate'>".$row['nvchcontenido']."</p></td>		        	
		        	<td><a target='_blank' href='".$row['nvchimg']."' class='btn btn-xs btn-default'>Enlace Img</a></td>
		        	<td>".$row['nvchdate']."</td>
		        	<td>".$row['nvchcategoria']."</td>
		        	<td>".$row['btestado']."</td>
		        	<td>
		        		<a href='mensaje_editar.php?codigo=".$row['indidblog']."' class='btn btn-info btn-xs'>Editar</a>
		        		<a href='#' data-value='".$row['indidblog']."' onclick='' id='btn-eliminar' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#myModal'>Eliminar</a>
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
				window.location.href = "mensaje_eliminar.php?codigo="+cod+"";
			}
		</script>

		<!-- STYLE	 -->
		<style>
			.truncate {
			  width: 450px;
			  height: 60px;
			  white-space: nowrap;
			  overflow: hidden;
			  text-overflow: ellipsis;
			}
		</style>