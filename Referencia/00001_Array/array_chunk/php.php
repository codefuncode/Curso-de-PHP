<?php
//////////////////////////////
//  Definición de la matriz.
$mi_matriz = array(
	'Elemento 1',
	'Elemento 2',
	'Elemento 3',
	'Elemento 4',
	'Elemento 5',
);
// ========
// Variables para ejemplos de implementacion
$variable_1;
$variable_2;
$variable_3;
// ========
//////////////////////////////
// print_r(array_chunk($mi_matriz, 2));
// ====================================================
//  Uso de la funcion array_chunk()
$matriz_segmantada_1 = array_chunk($mi_matriz, 4);
// ====================================================

for ($i = 0; $i < count($matriz_segmantada_1); $i++) {
	// Bucle
	echo "<br/>";
	if ($i == 0) {
		echo "===================================== 1";
		echo "<br/>";
	}
	var_dump($matriz_segmantada_1[$i]);
	echo "<br/>";
} // Fin del bucle

echo "<br/>";
// print_r(array_chunk($mi_matriz, 2, true));
$matriz_segmantada_2 = array_chunk($mi_matriz, 2, true);

for ($i = 0; $i < count($matriz_segmantada_2); $i++) {
	echo "<br/>";
	if ($i == 0) {
		echo "===================================== 2";
		echo "<br/>";
	}
	if ($i == 0) {
		$variable_1 = $matriz_segmantada_2[$i];
		var_dump($variable_1[0]);
		var_dump($variable_1[1]);
	} elseif ($i == 1) {
		$variable_2 = $matriz_segmantada_2[$i];
		var_dump($variable_2[2]);
		var_dump($variable_2[3]);
	} elseif ($i == 2) {
		$variable_3 = $matriz_segmantada_2[$i];
		var_dump($variable_3[4]);
	}

	// var_dump($matriz_segmantada_2[$i]);
	echo "<br/>";
}
// print_r(array_chunk($mi_matriz, 2, true));
$matriz_segmantada_3 = array_chunk($mi_matriz, 2, false);

for ($i = 0; $i < count($matriz_segmantada_3); $i++) {
	echo "<br/>";
	if ($i == 0) {
		echo "===================================== 3";
		echo "<br/>";
	}
	if ($i == 0) {
		$variable_1 = $matriz_segmantada_3[$i];
		var_dump($variable_1[0]);
		var_dump($variable_1[1]);
	} elseif ($i == 1) {
		$variable_2 = $matriz_segmantada_3[$i];
		var_dump($variable_2[0]);
		var_dump($variable_2[1]);
	} elseif ($i == 2) {
		$variable_3 = $matriz_segmantada_3[$i];
		var_dump($variable_3[0]);
	}
	// var_dump($matriz_segmantada_3[$i]);
	echo "<br/>";
}
?>