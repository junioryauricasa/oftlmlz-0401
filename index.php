<?php

	$title       = 'Dr. Henry Alcántara - Oftalmoluz';
	$description = 'Oftalmoluz - Dr. Henry Alcántara / Cirujano Oftalmólogo, Huancayo';

	$pestana1 = "active";
	$pestana2 = "";
	$pestana3 = "";
	$pestana4 = "";
	$pestana5 = "";
	$pestana6 = "";
	$pestana7 = "";

	include '_Include/header.php';

?>
		<!-- end header -->
		<section id="featured" style="margin-top: 40px;">
			<!-- start slider -->
			<div class="container">
				<div class="row" style="margin-bottom: 0px">
					<div class="col-lg-12">
						<!-- Start WOWSlider BODY section -->
						<div id="wowslider-container1" style="margin-top: 50px">
							<div class="ws_images">
								<ul>
									<li>
										<img src="img/slides/1.jpg" alt="1" title="1" id="wows1_0" width="100%" />
									</li>
									<li>
										<img src="img/slides/2.jpg" alt="2" title="2" id="wows1_1" width="100%" />
									</li>
									<li>
										<img src="img/slides/3.jpg" alt="3" title="3" id="wows1_2" width="100%" />
									</li>
									<li>
										<a href="#">
											<img src="img/slides/4.jpg" alt="html slideshow" title="4" id="wows1_3" width="100%" />
										</a>
									</li>
									<li>
										<img src="img/slides/5.jpg" alt="5" title="5" id="wows1_4" width="100%" />
									</li>
								</ul>
							</div>
							<div class="ws_bullets">
								<div>
									<a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>1</span></a>
									<a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>2</span></a>
									<a href="#" title="3"><span><img src="data1/tooltips/3.jpg" alt="3"/>3</span></a>
									<a href="#" title="4"><span><img src="data1/tooltips/4.jpg" alt="4"/>4</span></a>
									<a href="#" title="5"><span><img src="data1/tooltips/5.jpg" alt="5"/>5</span></a>
								</div>
							</div>
							<div class="ws_script" style="position:absolute;left:-99%">
							</div>
							<div class="ws_shadow"></div>
						</div>	
						<!-- End WOWSlider BODY section -->


							<!-- Slider -->
							<!--div id="main-slider" class="flexslider">
								<ul class="slides">
									<li>
										<img src="img/slides/5.jpg" alt="" />
										<div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div>
									</li>
									<li>
										<img src="img/slides/4.jpg" alt="" />
										<div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div>
									</li>
									<li>
										<img src="img/slides/1.jpg" alt="" />
										<div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div>
									</li>
									<li>
										<img src="img/slides/2.jpg" alt="" />
										<div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div>
									</li>
									<li>
										<img src="img/slides/3.jpg" alt="" />
										<div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div>
									</li>
									
								</ul>
							</div-->
							<!-- end slider -->
						<br>
						
					</div>
					<!--div class="col-md-4" style="height: 100px">
						<marquee direction="up">
							Este texto se mueve de abajo hacia arriba Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero dolor, facilis molestiae accusamus quasi ipsum saepe, nulla tenetur. Esse eos rem sapiente, error distinctio, tenetur! Dolor eveniet ad earum, eum?
						</marquee>
					</div-->
				</div>
				<div class="row" id="textoDeslizable">
					<marquee style="border-top: solid 2px #0098da; border-bottom: solid 2px #0098da; padding: 3px 0px 3px 0px; background-color: #0098da; color: white">
						<!--b>
							Campaña de salud visual en 15 Noviembre <button type="button" class="btn btn-default btn-xs">Entérate todo aquí</button>
							||
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque consequuntur repudiandae quae pariatur totam, illum, assumenda soluta qui est nihil, sed accusamus voluptatem quas deleniti similique itaque veritatis odit voluptas!
							||
							Campaña de salud visual en 15 Noviembre
						</b-->
						<b>
							
						<?php 
							// select marque
							include('consultas/select-marque.php'); 
						?>

						</b>
					</marquee>
				</div>
			</div>

		</section>
		<!--section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2><span>Titulo</span> Principal</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section-->
		<section id="content" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4><b>Opciones</b> </h4>
						<ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="font-weight: bolder; margin: 0px">
							<li role="presentation" class="active" onclick="loadDocMisionVision()" id="loadDocMisionVision">
								<a href="#textoDeslizable">Quiénes Somos?</a>
							</li> 
							<li role="presentation" onclick="loadDocCampanaOftalmologicas()" id="loadDocCampanaOftalmologicas">
								<a href="#textoDeslizable">Campañas Oftalmológicas</a>
							</li> 
							<li role="presentation" onclick="loadDocResponsabilidadSocial()" id="loadDocResponsabilidadSocial">
								<a href="#textoDeslizable">Responsabilidad Social</a>
							</li> 
							<!--li role="presentation" onclick="loadDocNuestrosConvenios()" id="loadDocNuestrosConvenios">
								<a href="#textoDeslizable">Nuestros Convenios</a>
							</li-->
							<li role="presentation" onclick="loadDocStaffMedico()" id="loadDocStaffMedico">
								<a href="staff">Staff Médico</a>
							</li> 
							<li role="presentation" onclick="loadDocTrabajaConNosotros()" id="loadDocTrabajaConNosotros">
								<a href="#textoDeslizable">Trabaja con Nosotros</a>
							</li> 
							<!--li role="presentation" onclick="loadDocInfoCirugias()" id="loadDocInfoCirugias">
								<a href="#">Info Cirugias</a>
							</li-->
						</ul>
					</div>

					<div class="col-md-9" id="demo">
						<!-- Mensaje Alert de Bienvenida -->
						<div class="alert alert-info alert-dismissible fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Bienvenido!</strong> Recibe un cordial saludo. Su salud ocular es lo primero, nuestro centro brinda una adecuada prevención, diagnóstico y tratamiento de las enfermedades oculares. Estamos preparados, contamos con diversos equipos computarizados de alta tecnología indispensables para brindar una atención oftalmológica integral.
						</div>
						<!-- END Mensaje Alert de Bienvenida -->

						<div class="col-lg-12" id="titulo">
							<h1>Quienes somos? </h1>
						</div>

						<div class="col-md-6" id="mision">
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
							</div>
						</div>
						<div class="col-md-6" id="vision">
							<div class="box">
								<div class="box-gray aligncenter">
									<h4>Visión</h4>
									<div class="icon">
										<i class="fa fa-desktop fa-3x"></i>
									</div>
									<p>
										Ser la institución lider en la excelencia de servicio, orientada a la atencion integral y seguridad del paciente
									</p>

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
				<!-- end divider -->

				<!-- Portfolio Projects -->
				<!--div class="row">
					<div class="col-lg-12">
						<h4 class="heading">Nuestros Ultimos Trabajos</h4>
						<div class="row">
							<section id="projects">
								<ul id="thumbs" class="portfolio">
									<li class="col-lg-3 design" data-id="id-0" data-type="web">
										<div class="item-thumbs">
											<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Titulo 1" href="img/works/1.jpg">
											<span class="overlay-img"></span>
											<span class="overlay-img-thumb font-icon-plus"></span>
											</a>
											<img src="img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
										</div>
									</li>
									<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
										<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Titulo 2" href="img/works/2.jpg">
										<span class="overlay-img"></span>
										<span class="overlay-img-thumb font-icon-plus"></span>
										</a>
										<img src="img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
									</li>
									<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
										<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Titulo 3" href="img/works/3.jpg">
										<span class="overlay-img"></span>
										<span class="overlay-img-thumb font-icon-plus"></span>
										</a>
										<img src="img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
									</li>
									<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
										<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Titulo 4" href="img/works/4.jpg">
										<span class="overlay-img"></span>
										<span class="overlay-img-thumb font-icon-plus"></span>
										</a>
										<img src="img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
									</li>
								</ul>
							</section>
						</div>
					</div>
				</div-->
			</div>
		</section>

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
	      <!--p>Some text in the modal.</p-->
	      <img src="img/anuncios/Hyo.jpg" alt="" class="img-responsive">
	    </div>
	    <!--div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div-->
	  </div>
	</div>
</div>
<!-- END Modal anuncios-->



<style>
#demo{
	transition: all .5s
}	
</style>


<!-- Js -->
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

<!--LOAD con ajax-->
<script>
    // demostracion
    function loadDocInfoCirugias() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "infocirugias.php", true);
      xhttp.send();

      //ocultar elemento
      //$("#demo2").hide();

      //mostrar flecha seleccionadora
      //$("#flecha_huancayo").show();
    }


    function loadDocMisionVision() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadDocMisionVision.php", true);
      xhttp.send();

      $("#loadDocMisionVision").addClass("active");
      $("#loadDocResponsabilidadSocial").removeClass("active");
      $("#loadDocCampanaOftalmologicas").removeClass("active");
      $("#loadDocNuestrosConvenios").removeClass("active");
      $("#loadDocTrabajaConNosotros").removeClass("active");
      //ocultar elemento
      //$("#demo2").hide();

      //mostrar flecha seleccionadora
      //$("#flecha_huancayo").show();
    }
    function loadDocCampanaOftalmologicas() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "CampanaOftalmologicas.php", true);
      xhttp.send();

      $("#loadDocResponsabilidadSocial").removeClass("active");
      $("#loadDocCampanaOftalmologicas").addClass("active");
      $("#loadDocMisionVision").removeClass("active");
      $("#loadDocNuestrosConvenios").removeClass("active");
      $("#loadDocTrabajaConNosotros").removeClass("active");
      //ocultar elemento
      //$("#demo2").hide();

      //mostrar flecha seleccionadora
      //$("#flecha_huancayo").show();
    }

    function loadDocResponsabilidadSocial() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadDocResponsabilidadSocial.php", true);
      xhttp.send();

      $("#loadDocResponsabilidadSocial").addClass("active");
      $("#loadDocCampanaOftalmologicas").removeClass("active");
      $("#loadDocMisionVision").removeClass("active");
      $("#loadDocNuestrosConvenios").removeClass("active");
      $("#loadDocTrabajaConNosotros").removeClass("active");
      
      //ocultar elemento
      //$("#demo2").hide();

      //mostrar flecha seleccionadora
      //$("#flecha_huancayo").show();
    }


    // load Convenios
    function loadDocNuestrosConvenios() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadDocNuestrosConvenios.php", true);
      xhttp.send();

      $("#loadDocResponsabilidadSocial").removeClass("active");
      $("#loadDocCampanaOftalmologicas").removeClass("active");
      $("#loadDocMisionVision").removeClass("active");
      $("#loadDocNuestrosConvenios").addClass("active");
      $("#loadDocTrabajaConNosotros").removeClass("active");
      //ocultar elemento
      //$("#demo2").hide();

      //mostrar flecha seleccionadora
      //$("#flecha_huancayo").show();
    }



    // load Convenios
    function loadDocTrabajaConNosotros() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "loadDocTrabajaConNosotros.php", true);
      xhttp.send();

      $("#loadDocResponsabilidadSocial").removeClass("active");
      $("#loadDocCampanaOftalmologicas").removeClass("active");
      $("#loadDocMisionVision").removeClass("active");
      $("#loadDocNuestrosConvenios").removeClass("active");
      $("#loadDocTrabajaConNosotros").addClass("active");
      
      //ocultar elemento
      //$("#demo2").hide();

      //mostrar flecha seleccionadora
      //$("#flecha_huancayo").show();
    }

</script>

<?php include '_Include/footer.php';?>