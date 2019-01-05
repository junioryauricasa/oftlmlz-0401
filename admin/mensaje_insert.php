<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Crear Nuevo Mensaje</h4>
      </div>
      <div class="modal-body">
        
		<form action="" method="post">
		  <div class="form-group">
		    <!--label for="exampleInputEmail1">Ingrese Mensaje</label-->
		    <input type="text" class="form-control" id="mensaje" name="mensaje" aria-describedby="emailHelp" placeholder="Ingresar mensaje personalizado" required="true">
		    <small id="emailHelp" class="form-text text-muted">Este mensaje se desplazara horizontalmente debajo del banner del menu principal</small>
		  </div>
		  <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
		</form>

      </div>
      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div--><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
	if(isset($_POST['enviar'])){
		
		include('credenciales.php');

		$mensaje = $_POST['mensaje'];

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO tb_mensaje (intidmensaje, nvchmensaje)
		VALUES (NULL, '$mensaje')";

		if (mysqli_query($conn, $sql)) {
		    echo "nuevo registro exitosamente creado";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}else
	{

	}

?>