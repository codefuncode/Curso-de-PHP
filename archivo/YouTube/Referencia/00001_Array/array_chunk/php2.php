<?php
//  Referencias
// -------------------------------------------------------------------------------------------------------------=
// Devolver valores ¶
//  https://www.php.net/manual/es/functions.returning-values.php#functions.returning-values.type-declaration
// -------------------------------------------------------------------------------------------------------------=
class Person {
	private $nombre;
	private $apellido;

	public function __construct(string $nombre, string $apellido) {
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	public function __get($propiedad) {
		return $this->$propiedad;
	}
	// //////////////////////////////////////////////////////////////////////////
	// En php7 los {:} seguidos del
	// tipo de dato indica que devolverá
	// ese tipo de dato en específico
	public function __isset($propiedad): bool {

		return isset($this->$propiedad);
	}
	// //////////////////////////////////////////////////////////////////////////
}

$people = [
	new Person('Nombre 1', 'Apellido 1'),
	new Person('Nombre 2', 'Apellido 2'),
	new Person('Nombre 3', 'Apellido 3'),
];
// Al pasar el nombre de la propiedadiedad,
// el método mágico _get() devuelve el
// nombre de la propiedadiedad.

print_r(array_column($people, 'nombre'));
echo "<br/>";
print_r(array_column($people, 'apellido'));
