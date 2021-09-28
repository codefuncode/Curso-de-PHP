<?php

/**
 *
 */
class Persona
{

   private $nombre   = array();
   private $apellido = array();

   public function __construct()
   {

   }

   public function Guardar($nombre = '', $apellido = '')
   {
      array_push($this->nombre, $nombre);
      array_push($this->apellido, $apellido);
   }
   public function Mostrar()
   {
      for ($i = 0; $i < count($this->nombre); $i++) {

         self::Formato($this->nombre[$i], $this->apellido[$i]);
      }
   }

   public function Formato($nombre = '', $apellido = '')
   {
      echo "El nombre es : {$nombre} y le apellido es : {$apellido}";
      echo "<br/>";
   }
}

$alumno = new Persona();
$alumno->Guardar("Carlos", "Aleman");
// $alumno->Mostrar();
$alumno->Guardar("Carlos", "Uno");
$alumno->Guardar("Carlos", "Dos");
$alumno->Guardar("Carlos", "Tres");
$alumno->Guardar("Carlos", "Cuatro");
// $alumno->Mostrar();
$alumno->Guardar("Carlos", "Cuatro");
$alumno->Mostrar();
