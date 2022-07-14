<?php
// Devuelve una matriz con todas las claves de
// la matriz en minúsculas o mayúsculas. Los índices
// numerados se dejan como están.
$input_array = array("FirSt" => 1, "SecOnd" => 4);

$input_array = array_change_key_case($input_array, CASE_UPPER);
var_dump($input_array);

// array (size=2)
//   'FIRST' => int 1
//   'SECOND' => int 4

$input_array = array_change_key_case($input_array, CASE_LOWER);
var_dump($input_array);

// array (size=2)
//   'first' => int 1
//   'second' => int 4

?>