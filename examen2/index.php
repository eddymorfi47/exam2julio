<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Eddie Blog</title>

        <link rel="stylesheet" href="css/style.css">
</head>

<body>

	<header id="main-header">

		<h2 id="logo-header" href="index.php">Eddie Blog</h2>

		<nav>
			<ul>
				<li><a href="inputpost.php">Nuevo Post</a></li>
			</ul>
		</nav>

	</header>


	<?php

			include_once("manejo.php");

			try{
				$miconexion=new PDO('mysql:host=localhost; dbname=blog', 'root', '');

				$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$manejo=new manejo($miconexion);

				$tabla_blog=$manejo->getContenidoPorFecha();

				if(empty($tabla_blog)){
					echo "No Hay Blogs";
				}
				else{
					foreach($tabla_blog as $valor){
						$titletitle= $valor->getTitulo();
						$datedate= $valor->getFecha();
						$contentcontent= $valor->getContenido();
						PRINT <<<HERE
						<section id="main-content">

							<article>
								<div class="content-title">
								<header>
									<h1>$titletitle</h1>
									<h2>$datedate</h2>
								</header>
								</div>
								<div class="content">
									<p>$contentcontent</p>
								</div>

							</article>

						</section>
HERE;
					

					}
				}


			}
			catch(Exception $e){
				die("Error:" . $e->getMessage());
			}

	?>

	<footer id="main-footer">
		<a>Blog de examen, Eddie</a>
	</footer>


</body>
</html>
