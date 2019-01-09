<?php
$title       = 'Publicación - Oftalmoluz clinica de ojos';
$description = 'Publicación de Oftalmoluz - Dr. Henry Alcántara / Cirujano Oftalmólogo, Huancayo';
include '_Include/header.php';

$codigopost = $_GET["codigo"] ;

?>

<!-- end header -->
<section id="content" style="margin-top: 75px">
	<div class="container">
		<!-- Titulo page -->
		<!--div class="row">
			<div class="col-lg-12">
				<h1>Glaucoma (Un vistazo general)</h1>
			</div>
		</div-->
		<!-- END Titulo page -->
		<div class="row">
			<div class="col-lg-8">


<?php
	//select-post-individual.php
	
	include ("admin/credenciales.php");

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM tb_blog WHERE indidblog=".$codigopost."";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       	echo '

				<article>
					<h3><a href="#">'.$row["nvchtituloblog"].'</a> <!--span style="font-size: 15px"> ('.$row["nvchdate"].')</span--></h3>
					<div class="post-image">
						<img src="'.$row["nvchimg"].'" alt="" clas="img-responsive" width="100%"/>
					</div>
					<p>
						'.$row["nvchcontenido"].'
					</p>
					<div class="bottom-article">
						<ul class="meta-post">
							<li>
								<i class="icon-calendar"></i>
								<a href="#">'.$row["nvchdate"].'</a>
							</li>
							<!--li><i class="icon-comments"></i><a href="#">Comentarios</a></li-->
						</ul>
					</div>
					<div>
					<!—- ShareThis BEGIN -—>
					<div class="sharethis-inline-share-buttons"></div><script async src="//platform-api.sharethis.com/js/sharethis.js#property=5c33014da47fe500116a8e66&product="inline-share-buttons"></script>
					<!—- ShareThis END -—>
					</div>
				</article>

				<div class="row">
					<div class="col-md-12">
						<div class="fb-comments" data-href="https://oftalmoluz.com/'.$codigopost.'" data-width="100%" data-numposts="10">
						</div>
					</div>
				</div>

	       	';
	    }
	} else {
	    echo "No se han encontrado resultados para esta publicación";
	}

	$conn->close();
?>


				<!--article>
					<div class="post-image">
						<img src="http://anideepeyehospital.com/wp-content/uploads/2016/08/banner-glaucoma-1.jpg" alt="" />
					</div>
					<p>
						El <b>glaucoma</b> es una enfermedad crónica, evolutiva y muy grave, ya que su curso natural es la ceguera. De hecho, es la principal causa de ceguera irreversible en el mundo, pues se estima que 66,8 millones de personas tienen glaucoma de los que 6,7 millones presentan ceguera...
					</p>
					<div class="bottom-article">
						<ul class="meta-post">
							<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
							<li><i class="icon-comments"></i><a href="#">Comentarios</a></li>
						</ul>
					</div>
				</article-->


			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
					<div class="widget">
						<form class="form-search">
							<input class="form-control" type="text" placeholder="Busqueda..">
						</form>
					</div>
					<div class="widget">
						<h5 class="widgetheading">Categorías</h5>
						<ul class="cat">
							<!--li>
								<i class="icon-angle-right"></i>
								<a href="#">Web design</a>
								<span> (20)</span>
							</li>
							<li><i class="icon-angle-right"></i><a href="#">Negoscios online</a><span> (11)</span></li>
							<li><i class="icon-angle-right"></i><a href="#">Marketing Digital</a><span> (9)</span></li>
							<li><i class="icon-angle-right"></i><a href="#">Technologia</a><span> (12)</span></li-->
								<?php include('consultas/select-cirugias.php'); ?>
						</ul>
					</div>
					<div class="widget">
						<h5 class="widgetheading">Ultimas Publicaciones</h5>
						<ul class="recent">
							<li>
								<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
								<h6><a href="#">Lorem ipsum dolor sit</a></h6>
								<p>
									Mazim alienum appellantur eu cu ullum officiis pro pri
								</p>
							</li>
							<li>
								<a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
								<h6><a href="#">Maiorum ponderum eum</a></h6>
								<p>
									Mazim alienum appellantur eu cu ullum officiis pro pri
								</p>
							</li>
							<li>
								<a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
								<h6><a href="#">Et mei iusto dolorum</a></h6>
								<p>
									Mazim alienum appellantur eu cu ullum officiis pro pri
								</p>
							</li>
						</ul>
					</div>
					<div class="widget">
						<h5 class="widgetheading">Etiquetas Populares</h5>
						<ul class="tags">
							<li><a href="#">Etiqueta 1</a></li>
							<li><a href="#">Etiqueta 1</a></li>
							<li><a href="#">Etiqueta 1</a></li>
							<li><a href="#">Etiqueta 1</a></li>
							<li><a href="#">Etiqueta 1</a></li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>

<?php include '_Include/footer.php';?>