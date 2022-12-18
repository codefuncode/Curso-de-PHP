<?php
// array_diff_uassoc();
// formación

// La matriz para comparar
// arreglos

// Matrices para comparar
// key_compare_func

// La función de comparación debe devolver un número entero menor, igual o mayor que cero si el primer argumento se considera respectivamente menor, igual o mayor que el segundo.

// Ejemplo #1 Array_diff_uassoc () Ejemplo

// El par "A" => "verde" está presente en ambas matrices y, por lo tanto, no está en la salida de la función. A diferencia de esto, el par 0 => "rojo" está en la salida porque en el segundo argumento "rojo" tiene clave que es 1.

function key_compare_func($a, $b) {
	if ($a === $b) {
		return 0;
	}
	return ($a > $b) ? 1 : -1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");

$array2 = array("a" => "green", "yellow", "red");

$result = array_diff_uassoc($array1, $array2, "key_compare_func");

var_dump($result);

// Array ( [b] => brown [c] => blue [0] => red )
?>