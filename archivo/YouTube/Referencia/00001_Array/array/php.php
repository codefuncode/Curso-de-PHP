<?php

//  Sintaxis 'índice = valores', separados por comas, definen índice y valores.
// El índice puede ser de tipo cadena o entero. Cuando se omite el índice,
// se genera automáticamente un índice entero, comenzando en 0. Si el índice
// es un número entero, el siguiente índice generado será el índice entero
// más grande + 1. Tenga en cuenta que cuando se definen dos índices idénticos,
// el último sobrescribe al primero.

// Tener una coma final después de la última entrada de matriz definida,
// aunque es inusual, es una sintaxis válida.

$array = array(
	1, // inidice 0
	1, // inidice 1
	1, // inidice 2
	1, // inidice 3
	1, // inidice 4
	8 => 1, // inidice 8
	4 => 1, // inidice 4
	19, // inidice 5
	3 => 13, // inidice 3
);
print_r($array);
var_dump($array);
// array (size=7)
//   0 => int 1
//   1 => int 1
//   2 => int 1
//   3 => int 13
//   4 => int 1
//   8 => int 1
//   9 => int 19

$firstquarter = array(1 => 'January', 'February', 'March');
print_r($firstquarter);
var_dump($firstquarter);

$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!