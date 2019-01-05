<?php
$dr = '- Dr. Henry Alcántara'; // variable henry
$title       = 'Nosotros - Oftalmoluz clinica de ojos '.$dr;
$description = 'Blog de Oftalmoluz - Dr. Henry Alcántara / Cirujano Oftalmólogo, Huancayo';

$pestana1 = "";
$pestana2 = "";
$pestana3 = "";
$pestana4 = "";
$pestana5 = "";
$pestana6 = "active";
$pestana7 = "";

include '_Include/header.php';
?>

<!-- body container -->

<section id="content" style="margin-top: 50px">
	<div class="container">
		<!-- Titulo page -->
		<div class="row">
			<div class="col-lg-12">
				<h1>Sobre Nosotros</h1>
			</div>
		</div>

		<!-- valores -->
		<div class="row">
			<div class="col-lg-3">
				<div class="row">
					<ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="font-weight: bolder; margin: 0px">
						<li role="presentation" class="active">
							<a href="#">Misión / Visión</a>
						</li> 
						<li role="presentation">
							<a href="#">Reseña Historica</a>
						</li>  
					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Misión</h4>
								<div class="icon">
									<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
									Brindar un servicio oftalmológico especializado e integral con calidad y tecnología.
								</p>

							</div>
							<!--div class="box-bottom">
								<a href="#">Learn more</a>
							</div-->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Visión</h4>
								<div class="icon">
									<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
									Ser la institución lider en la excelencia de servicio, orientada a la atencion integral y seguridad del paciente.
								</p>

							</div>
							<!--div class="box-bottom">
								<a href="#">Learn more</a>
							</div-->
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END body container -->

<?php include '_Include/footer.php';?>