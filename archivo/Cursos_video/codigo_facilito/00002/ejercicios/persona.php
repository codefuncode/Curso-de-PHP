<?php

/**
 *
 */
class Persona
{
   // public $nombre = "Carlos";

   public function __construct()
   {
      $this->nombre = "Carlos";
   }

   public function Hablar($value = '')
   {
      echo $this->nombre;
   }
}

$individuo = new Persona();

$individuo->Hablar();
