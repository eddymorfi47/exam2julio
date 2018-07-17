<?php
include_once('obtener.php');

class manejo{
  private $conexion;

  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }

  public function getContenidoPorFecha(){
    $matriz=array();

    $contador=0;

    $resultado=$this->conexion->query("SELECT * FROM posts ORDER BY FECHA");

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $blog=new obtener();
      $blog->setTitulo($registro["Titulo"]);
      $blog->setContenido($registro["Contenido"]);
      $blog->setFecha($registro["Fecha"]);

      $matriz[$contador]=$blog;
      $contador++;
    }
    return $matriz;

  }

public function insertaContenido(obtener $blog){

  $sql="INSERT INTO posts (titulo, contenido, fecha) VALUES ('" . $blog->getTitulo() . "','" . $blog->getContenido() . "','" . $blog->getFecha() . "')";
  $this->conexion->exec($sql);
}



}


 ?>
