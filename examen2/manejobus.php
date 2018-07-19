<?php
include_once('obtener.php');
include_once('busqueda.php');

class manejobus{
  private $conexionb;
  private $palbus;
  public function __construct ($conexionb) {

$this->setConexionb($conexionb);

  }

  public function setConexionb(PDO $conexionb){
    $this->conexionb=$conexionb;
  }

  public function getContenidoPorBus(){
    $matrizb=array();
    $contadorb=0;
    $busbus = $_POST['palabrabus'];
    $resultadob=$this->conexionb->query("SELECT * FROM posts WHERE Titulo LIKE '%$busbus%' ORDER BY FECHA");

    while($registrob=$resultadob->fetch(PDO::FETCH_ASSOC)){
      $blogb=new obtener();
      $blogb->setTitulo($registrob["Titulo"]);
      $blogb->setContenido($registrob["Contenido"]);
      $blogb->setFecha($registrob["Fecha"]);

      $matrizb[$contadorb]=$blogb;
      $contadorb++;
    }
    return $matrizb;

  }





}


 ?>
