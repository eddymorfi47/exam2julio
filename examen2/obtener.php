<?php
   class obtener{
     private $id;
     private $Titulo;
     private $Contenido;
     private $Fecha;
   // id
     public function getId(){
       return $this->id;

     }

     public function setId($id){
       $this->id=$id;
     }


 // titulo
     public function getTitulo(){
       return $this->Titulo;

     }

     public function setTitulo($Titulo){
       $this->Titulo=$Titulo;
     }


 // contenido
     public function getContenido(){
       return $this->Contenido;

     }

     public function setContenido($Contenido){
       $this->Contenido=$Contenido;
     }

 // fecha
     public function getFecha(){
       return $this->Fecha;

     }

     public function setFecha($Fecha){
       $this->Fecha=$Fecha;
     }

   }

 ?>
