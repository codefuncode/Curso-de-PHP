<?php
// El primer parámetro recibe una matriz,
// el segundo la longitud en la que se dividirán
// los segmentos. Por último, un booleano que
// representa si se conservarán los índices en
// la nueva matriz que devuelve la función.
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));

?>