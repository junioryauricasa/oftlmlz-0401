<!-- Select mensajes marque -->
<?php
	//select-blog-examen.php
	
	include ("admin/credenciales.php");
	
/*
	//coneccion db
	$servername = "142.44.240.81";
	$username = "ene24ofd";
	$password = "q5U4slUIL3p2";
	$dbname = "ene24ofd_oftalmoluz_jy";

*/
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM tb_blog";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$tituloEnlace = str_replace(" ","-",$row["nvchtituloblog"]);
	       	echo '
				<article>
					
						<div class="post-heading">
							<h3><a href="#">'.$row["nvchtituloblog"].'</a> <span style="font-size: 15px"> ('.$row["nvchdate"].')</span></h3>
						</div>

						<!--div class="post-image">
							<img src="'.$row["nvchimg"].'" alt="" width="100%"/>
						</div-->

						<p class="overflow-ellipsis">
							'.$row["nvchcontenido"].'
						</p>

						<div class="bottom-article">
							<!--ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Commentarioss</a></li>
							</ul-->
							<a href="post?public='.$tituloEnlace.'&codigo='.$row["indidblog"].'" class="pull-right btn btn-danger">Continuar leyendo <i class="icon-angle-right"></i></a>
						</div>

				</article>
	       	';
	    }
	} else {
	    echo "sin resultados por el momento";
	}

	$conn->close();
?>
<!-- END Select mensajes marque -->