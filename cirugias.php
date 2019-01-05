<?php

	$title       = 'Dr. Henry Alcántara - Oftalmoluz';
	$description = 'Cirugias - Oftalmoluz - Dr. Henry Alcántara / Cirujano Oftalmólogo, Huancayo';

	$pestana1 = "";
	$pestana2 = "";
	$pestana3 = "active";
	$pestana4 = "";

	include '_Include/header.php';

	//buscando en el header para mustra de blog completo
	$cod = $_GET["codigo"];

?>

<!-- body container -->

<section id="content" style="margin-top: 0px">
	<div class="container">
		<!-- Titulo page -->
		<div class="row" style="margin-bottom: 0px">
			<div class="col-lg-12">
				<h1>Cirugías Oculares</h1>
			</div>
		</div>
		<!-- END Titulo page -->
		<div class="row">
			<div class="col-lg-8">
				
				<!--article>
					<div class="post-image">
						<div class="post-heading">
							<h3><a href="#">Post con imagen simple</a></h3>
						</div>
						<img src="img/dummies/blog/img1.jpg" alt="" />
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. A soluta excepturi ex. Quo assumenda quibusdam, voluptatum laborum quaerat necessitatibus iusto, voluptatem similique et adipisci obcaecati voluptate optio ratione, accusantium qui!
					</p>
					<div class="bottom-article">
						<ul class="meta-post">
							<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
							<li><i class="icon-user"></i><a href="#"> Admin</a></li>
							<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
							<li><i class="icon-comments"></i><a href="#">4 Commentarioss</a></li>
						</ul>
						<a href="#" class="pull-right">Continuar leyendo <i class="icon-angle-right"></i></a>
					</div>
				</article-->

				<?php include('consultas/select-blog-examen.php'); ?>

				<!--article>
					<div class="post-slider">
						<div class="post-heading">
							<h3><a href="#">Post con slider</a></h3>
						</div>

						<div id="post-slider" class="flexslider">
							<ul class="slides">
								<li>
									<img src="img/dummies/blog/img1.jpg" alt="" />
								</li>
								<li>
									<img src="img/dummies/blog/img2.jpg" alt="" />
								</li>
								<li>
									<img src="img/dummies/blog/img3.jpg" alt="" />
								</li>
							</ul>
						</div>

					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores architecto rem illo quasi fuga est nostrum omnis nihil eligendi, maxime officiis natus, distinctio inventore dicta officia, alias fugit tempore impedit.
					</p>
					<div class="bottom-article">
						<ul class="meta-post">
							<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
							<li><i class="icon-user"></i><a href="#"> Admin</a></li>
							<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
							<li><i class="icon-comments"></i><a href="#">4 Commentarioss</a></li>
						</ul>
						<a href="#" class="pull-right">Continuar leyendo <i class="icon-angle-right"></i></a>
					</div>
				</article>
				<article>
					<div class="post-quote">
						<div class="post-heading">
							<h3><a href="#">Post de solo texto</a></h3>
						</div>
						<blockquote>
							<i class="icon-quote-left"></i>
							Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
						</blockquote>
					</div>
					<div class="bottom-article">
						<ul class="meta-post">
							<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
							<li><i class="icon-user"></i><a href="#"> Admin</a></li>
							<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
							<li><i class="icon-comments"></i><a href="#">4 Commentarioss</a></li>
						</ul>
						<a href="#" class="pull-right">Continuar leyendo <i class="icon-angle-right"></i></a>
					</div>
				</article>
				<article>
					<div class="post-video">
						<div class="post-heading">
							<h3><a href="#">Post con video</a></h3>
						</div>
						<div class="video-container">
							<iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
						</iframe>
						</div>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga eligendi voluptate, omnis laboriosam dolores facilis voluptas explicabo distinctio impedit consequatur, porro sint quam nobis veniam natus possimus. Quos, necessitatibus, tenetur.
					</p>
					<div class="bottom-article">
						<ul class="meta-post">
							<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
							<li><i class="icon-user"></i><a href="#"> Admin</a></li>
							<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
							<li><i class="icon-comments"></i><a href="#">4 Commentarioss</a></li>
						</ul>
						<a href="#" class="pull-right">Continuar leyendo <i class="icon-angle-right"></i></a>
					</div>
				</article-->

				<!-- pagination -->
				<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>

			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
					<div class="widget">
						<form class="form-search">
							<input class="form-control" type="text" placeholder="Busqueda..">
						</form>
					</div>
					<div class="widget">
						<h5 class="widgetheading">Categorías Blog</h5>
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
<!-- END body container -->

<?php include '_Include/footer.php';?>