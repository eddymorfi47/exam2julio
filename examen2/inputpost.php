<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		<title>Insertar Post</title>

        <link rel="stylesheet" href="css/style.css">
</head>

<body>

	<header id="main-header">

		<h2 id="logo-header" href="index.php">Eddie Blog</h2>

		<nav>
			<ul>
				<li><a href="index.php">Cancelar</a></li>
			</ul>
		</nav>

	</header>
	<section id="main-content2">

		<article>
			<form action="insertar.php" method="post" enctype="multipart/form-data" name="form1">
      <div class="content-title">
			<header>
        <h2>Agregando Nueva Publicación.</h2>
    		<input type="text" name="Titulodb" class="Input-text" placeholder="Introduzca el titulo de la publicación.">
			</header>
      </div>
			<div class="content">
				<textarea type="text" name="Contenidodb" class="Input-text2" cols="40" rows="5" placeholder="Introduzca el contenido de la publicación."></textarea>
			</div>
			<tr>
	    <td colspan="2" align="center">
	    <input type="submit" name="btn_enviar" id="btn_enviar" value="Publicar" class="myButton"></td></tr>
		</form>
		</article>

	</section>
	<footer id="main-footer">
		<a>Blog de examen, Eddie</a>
	</footer>


</body>
</html>
