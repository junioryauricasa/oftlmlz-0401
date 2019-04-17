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
					<div class="col-lg-12" style="padding-right: 0px; padding-left: 0px">
						
						<!-- End WOWSlider BODY section -->
							<!-- Slider -->
							<div id="main-slider" class="flexslider" style="margin-bottom: 0px">
								<ul class="slides">
									<li>
										<img src="img/slides/4.jpg" alt="" />
										<!--div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div-->
									</li>
									<li>
										<img src="img/slides/3.jpg" alt="" />
										<!--div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div-->
									</li>
									<li>
										<img src="img/slides/2.jpg" alt="" />
										<!--div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div-->
									</li>
									<li>
										<img src="img/slides/1.jpg" alt="" />
										<!--div class="flex-caption">
											<h3>Titulo</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur.
											</p>
											<a href="#" class="btn btn-theme">Detalles</a>
										</div-->
									</li>
									
								</ul>
							</div>
							<!-- end slider -->
						
					</div>
					<!--div class="col-md-4" style="height: 100px">
						<marquee direction="up">
							Este texto se mueve de abajo hacia arriba Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero dolor, facilis molestiae accusamus quasi ipsum saepe, nulla tenetur. Esse eos rem sapiente, error distinctio, tenetur! Dolor eveniet ad earum, eum?
						</marquee>
					</div-->
				</div>
				<div class="row" id="textoDeslizable">
					<marquee style="border-top: solid 2px #0098da; border-bottom: solid 2px #0098da; padding: 3px 0px 3px 0px; background-color: #0098da; color: white">
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
		<section id="content" style=" padding: 10px 0 40px 0;">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4><b>Opciones</b> </h4>
						<ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="font-weight: bolder; margin: 0px">
							<li role="presentation" class="active" onclick="loadDocCampanaOftalmologicas()" id="loadDocCampanaOftalmologicas">
								<a href="#textoDeslizable">Campañas Oftalmológicas</a>
							</li> 
							<li role="presentation" onclick="loadDocMisionVision()" id="loadDocMisionVision">
								<a href="#textoDeslizable">Quiénes Somos?</a>
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
						<?php include("CampanaOftalmologicas.php"); ?>
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
<!--div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Importante</h4>
	    </div>
	    <div class="modal-body">
	      <img src="img/anuncios/Hyo.jpg" alt="" class="img-responsive">
	      <br>
	      <a href="https://www.facebook.com/events/655104914907829/" class="btn btn-danger " style=""> Información</a>
	    </div>
	  </div>
	</div>
</div-->
<!-- END Modal anuncios-->

<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Importante</h4>
	    </div>
	    <div class="modal-body">
	      
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
				    <img src="img/anuncios/Hyo.jpg" alt="" class="img-responsive">
				    <br>
				    <a href="https://www.facebook.com/events/655104914907829/" class="btn btn-danger " style="">Ir al Evento</a>
					<a href="https://api.whatsapp.com/send?phone=51941103434&text=hola, he visto tu anuncio en http://oftalmoluz.com/ y me gustaria recibir informacón sobre la campaña: " class="btn btn-success" >Consultar</a>
			    </div>

			    <div class="item">
			      <img src="img/anuncios/Hyo.jpg" alt="Chicago">
			    </div>

			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

	    </div>
	  </div>
	</div>
</div>

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