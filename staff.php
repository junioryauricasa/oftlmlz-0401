<?php
$dr = '- Dr. Henry Alcántara'; // variable henry
$title       = 'Staff Médico - Oftalmoluz clinica de ojos'.$dr;
$description = 'Blog de Oftalmoluz - Dr. Henry Alcántara / Cirujano Oftalmólogo, Huancayo';

$pestana1 = "";
$pestana2 = "active";
$pestana3 = "";
$pestana4 = "";
$pestana5 = "";
$pestana6 = "";
$pestana7 = "";

include '_Include/header.php';
?>

<style>
	.border {
		border: solid 1px black;
	}
</style>

<!-- body container -->
<section id="content" style="margin-top: 50px">
	<div class="container">
		<!-- Titulo page -->
		<div class="row">
			<div class="col-lg-12">
				<h1>Staff Médico</h1>
			</div>
		</div>

		<!-- END Titulo page -->
		<div class="row">
			<div class="col-lg-3">
				<ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="font-weight: bolder; margin: 0px; padding-bottom: 5px">
					<li role="presentation" id="loadEspecialidadIntegral" class="active" onclick="loadEspecialidadIntegral()" >
						<a href="#">ESPECIALIDAD OFTALMOLOGÍA INTEGRAL</a>
					</li> 
					<li role="presentation" id="loadEspecialidadCatarata" onclick="loadEspecialidadCatarata()" >
						<a href="#">ESPECIALIDAD CATARATA CIRUGÍA REFRACTIVA</a>
					</li> 
					<!--li role="presentation">
						<a href="#">ESPECIALIDAD CATARATA</a>
					</li>
					<li role="presentation">
						<a href="#">ESPECIALIDAD OFTALMOLOGÍA PEDIATRA</a>
					</li> 
					<li role="presentation">
						<a href="#">ESPECIALIDAD GLAUCOMA</a>
					</li> 
					<li role="presentation">
						<a href="#">ESPECIALIDAD CÓRNEA</a>
					</li--> 
				</ul>
			</div>
			<div class="col-lg-9" id="demo">
				<h1>Especialistas</h1>
				<p>Bienvenido a esta sección, mediante esta podras vizualizar a nuestro staff de la misma forma podras vizualizar sus respectivos horarios, para dudas y/o consultas puedes comunicarte directamente al siguiente enlace <a href="https://api.whatsapp.com/send?phone=51941103434&text=hola, he visto tu mensaje en http://oftalmoluz.com/staff y me gustaria saber lo siguiente: " class="btn btn-success btn-xs">Consultar</a></p>
			</div>

		</div>
	</div>
</section>
<!-- END body container -->

<script>
	function loadEspecialidadIntegral() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadEspecialidad/loadEspecialidadIntegral.php", true);
      xhttp.send();

      $("#loadEspecialidadIntegral").addClass("active");
      $("#loadEspecialidadCatarata").removeClass("active");
    }

	function loadEspecialidadCatarata() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadEspecialidad/loadEspecialidadCatarata.php", true);
      xhttp.send();

      $("#loadEspecialidadIntegral").removeClass("active");
      $("#loadEspecialidadCatarata").addClass("active");
    }



    // Horarios por especialidad
    function loadHorarioEspecialidad1Medico1() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("horario").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadEspecialidad/loadHorarioEspecialidad1Medico1.php", true);
      xhttp.send();
    }
    function loadHorarioEspecialidad1Medico2() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("horario").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadEspecialidad/loadHorarioEspecialidad1Medico1.php", true);
      xhttp.send();
    }
</script>

<?php include '_Include/footer.php';?>