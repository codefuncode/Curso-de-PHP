<?php
$array1 = array("a" => "green", "red", "blue", "red", "hola");
$array2 = array("b" => "hola", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);
