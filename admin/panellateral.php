<ul class="nav menu">
	<?php if (isset($_SESSION['usr_id'])) { ?>
	<li class="">
		<a href="convenios.php"><span class="glyphicon glyphicon-list-alt"></span>Convenios</a>
	</li>
	<li class="">
		<a href="#"><span class="glyphicon glyphicon-list-alt"></span>Campañas</a>
	</li>
	<li class="">
		<a href="categorias.php"><span class="glyphicon glyphicon-thumbs-up"></span>Categorias</a>
	</li>
	<li class="">
		<a href="mensaje.php"><span class="glyphicon glyphicon-user"></span>Mensaje</a>
	</li>
	<li class="">
		<a href="contenido.php"><span class="glyphicon glyphicon-user"></span>Contenido</a>
	</li>
	<li class="">
		<a href="users.php"><span class="glyphicon glyphicon-user"></span>Users</a>
	</li>
	<li>
		<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Salir</a>
	</li>
	<?php } else { ?>
	<li>
		<a href="login.php"><span class="glyphicon glyphicon-download-alt"></span>Login</a>
	</li>
	<li>
		<a href="register.php"><span class="glyphicon glyphicon-download-alt"></span>Registro</a>
	</li>
	<?php } ?>
	<li role="presentation" class="divider"></li>
</ul>