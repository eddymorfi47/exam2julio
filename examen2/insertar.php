<?php
  include_once("obtener.php");
  include_once("manejo.php");

    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=blog', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $manejo=new manejo($miconexion);
      $blog=new obtener();

      $blog->setTitulo(htmlentities(addslashes($_POST["Titulodb"]), ENT_QUOTES));
      $blog->setContenido(htmlentities(addslashes($_POST["Contenidodb"]), ENT_QUOTES));
      $blog->setFecha(Date("Y-m-d H:i:s"));

      $manejo->insertaContenido($blog);

      echo "<script type='text/javascript'>alert('Su post se ha subido al blog correctamente.');</script>";
      echo "<script type='text/javascript'>window.location.href='index.php';</script>";


}
catch(Exception $e){
  die("Error:" . $e->getMessage());
}
 ?>
