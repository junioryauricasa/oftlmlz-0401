<?php
$title       = 'Contactos - Oftalmoluz';
$description = 'Blog de Oftalmoluz - Dr. Henry Alcántara / Cirujano Oftalmólogo, Huancayo';
include '_Include/header.php';
?>

<!-- end header -->
<section id="content" style="margin-top: 85px">
	<div class="map">
		<!--div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d243.85114274600306!2d-75.2103025!3d-12.0697637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e964fb3ee1fc1%3A0xc0b0bd5ba08be169!2sJir%C3%B3n+Lima+385%2C+Huancayo+12000!5e0!3m2!1ses-419!2spe!4v1540021952018" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>Formulario de Contácto</h4>

				<div id="sendmessage">Tu mensaje fue enviado satisfactoriamente, Gracias!</div>
				<div id="errormessage"></div>

				<form action="contactmail.php" method="post" role="form" class="contactForm">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name" placeholder="Nombres y Apellidos" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Please enter a valid email" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Asunto del Mensaje" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
						<div class="validation"></div>
					</div>

					<div class="text-right"><button type="submit" class="btn btn-theme">Enviar Mensaje</button></div>
				</form>

			</div>

			<div class="col-md-6">
					<div class="fb-comments" data-href="https://oftalmoluz.com/" data-numposts="5" style='background-color: white;'></div>
			</div>

		</div>
	</div>
</section>

<?php include '_Include/footer.php';?>