<?php

function ejemolo1($value = '') {
	$array1 = array("a" => "green", "red", "blue", "red", "violet");
	$array2 = array("b" => "green", "yellow", "red", "pulpure");
	$result = array_diff($array1, $array2);

	print_r($result);

}

function ejemplo2($value = '') {

	// Esto generará un aviso de que una matriz no se puede lanzar a una cadena.
	$source = [1, 2, 3, 4];
	$filter = [3, 4, [5], 6];
	// $result = array_diff($source, $filter);

	// Mientras que esto está bien, ya que los objetos pueden arrojar a una cadena.
	class S {
		private $v;

		public function __construct(string $v) {
			$this->v = $v;
		}

		public function __toString() {
			return $this->v;
		}
	}

	$source = [new S('a'), new S('b'), new S('c')];
	$filter = [new S('b'), new S('c'), new S('d')];

	$result = array_diff($source, $filter);
	print_r($result);
// $result now contains one instance of S('a');

}

function ejemplo3($value = '') {
	$array1 = array("a" => 1, 2, 3, 4, 5, 6);
	$array2 = array("b" => 5, 6, 7, 8, 9, 10, 11, 12);
	// $array2 = array("b" => 5, "a" => 1, 6, 7, 8, 9, 10, 11, 12);
	// $array1 = array(1, 2, 3, 4, 5, 6);
	// $array2 = array(5, 6, 7, 8, 9, 10, 11, 12);
	$result = array_diff($array1, $array2);

	print_r($result);
}
function ejemplo4($value = '') {
	$array1 = array("a" => 1, 2, 3, 4, 5, 6);

	$array2 = array("b" => 5, "a" => 1, 6, 7, 8, 9, 10, 11, 12);
	// $array1 = array(1, 2, 3, 4, 5, 6);
	// $array2 = array(5, 6, 7, 8, 9, 10, 11, 12);
	$result = array_diff($array1, $array2);

	print_r($result);
}

echo "Ejemplo 1";
echo "<br/>";
ejemolo1();
echo "<br/>";
echo "<br/>";
echo "Ejemplo 2";
echo "<br/>";
ejemplo2();
echo "<br/>";
echo "<br/>";
echo "Ejemplo 3";
echo "<br/>";
ejemplo3();
echo "<br/>";
echo "<br/>";
echo "Ejemplo 4";
echo "<br/>";
ejemplo4();
echo "<br/>";