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
				<li><a href="index.php">Volver al Inicio</a></li>
				<nav>
					<ul>

	</header>
<div class="responsearch">
		<div class="searchbars">
			<form action="busqueda.php" method="post" enctype="multipart/form-data" name="form1">
				<input type="text" name="palabrabus" class="Input-texts" placeholder="Que deseas buscar.">
				<input type="submit" name="btn_enviar" id="btn_enviar" value="Buscar" class="myButtons"></td></tr>
			</form>
		</div>

	</div>



	<?php
			include_once("manejobus.php");

			try{
				$miconexionb=new PDO('mysql:host=localhost; dbname=blog', 'root', '');

				$miconexionb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$manejobusb=new manejobus($miconexionb);

				$tabla_blogb=$manejobusb->getContenidoPorBus();

				if(empty($tabla_blogb)){
					PRINT <<<HERE
					<section id="main-content">
						<article>
							<div class="content-title">
							<header>
								<h1>No Hay Blogs Con ese titulo.</h1>
							</header>
						</article>
					</section>
HERE;

				}
				else{
					foreach($tabla_blogb as $valorb){
						$titletitleb= $valorb->getTitulo();
						$datedateb= $valorb->getFecha();
						$contentcontentb= $valorb->getContenido();
						PRINT <<<HERE
						<section id="main-content">

							<article>
								<div class="content-title">
								<header>
									<h1>$titletitleb</h1>
									<h2>$datedateb</h2>
								</header>
								</div>
								<div class="content">
									<p>$contentcontentb</p>
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
