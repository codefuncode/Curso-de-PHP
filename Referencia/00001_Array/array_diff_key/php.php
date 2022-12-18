<?php
// Compara las claves de la matriz contra las claves de las
// matrices y devuelve la diferencia. Esta función es como
// array_diff() excepto que la comparación se realiza en
// las teclas en lugar de los valores.

$array1 = array(
	'blue' => 1,
	'red' => 2,
	'green' => 3,
	'purple' => 4,
);

$array2 = array(
	'green' => 5,
	'yellow' => 7,
	'cyan' => 8,
);

// $array1 = array(5, 7, 8, 3);
// $array2 = array(5, 7, 8);

// $array3 = array(
// 	'green' => 5,
// 	'yellow' => 7,
// 	'cyan' => 8,
// );

var_dump(
	array_diff_key(
		$array1,
		$array2
	)
);
// echo "<br/>";
// echo __DIR__;
//  Salida
// array (size=3)

// 'blue' => int 1
// 'red' => int 2
// 'purple' => int 4