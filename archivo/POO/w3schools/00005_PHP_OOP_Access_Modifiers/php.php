
<?php
/**
 * Definición de MyClass
 */
class MyClass {
	public $public = 'Public';
	protected $protected = 'Protected';
	private $private = 'Private';

	function printHello() {
		echo "</br></br>";
		echo var_dump($this->public);
		echo "</br>";
		echo var_dump($this->protected);
		echo "</br>";
		echo var_dump($this->private);
		echo "</br>";
	}
}

$obj = new MyClass();
echo $obj->public; // Funciona bien
// echo $obj->protected; // Error Fatal
// echo $obj->private; // Error Fatal
$obj->printHello(); // Muestra Public, Protected y Private

/**
 * Definición de MyClass2
 */
class MyClass2 extends MyClass {
	// Se pueden redeclarar las propiedades pública y protegida, pero no la privada
	public $public = 'Public2';
	protected $protected = 'Protected2';

	function printHello() {
		echo "</br></br>";
		echo var_dump($this->public);
		echo "</br>";
		echo var_dump($this->protected);
		echo "</br>";
		// echo var_dump($this->private);
		// echo "</br>";
	}
}

$obj2 = new MyClass2();
echo $obj2->public; // Funciona bien
// echo $obj2->protected; // Error Fatal
// echo $obj2->private; // Undefined
$obj2->printHello(); // Muestra Public2, Protected2, Undefined

?>
