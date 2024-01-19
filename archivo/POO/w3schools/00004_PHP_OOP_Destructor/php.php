 <?php
class Fruit {
	public $name;
	public $color;

	function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
		echo "</br></br>=========================</br>";
		echo "</br>Constuctor</br>";
		echo $this->name;
		echo "</br>";
		echo $this->color;
		echo "</br>=========================</br></br>";
	}
	function __destruct() {
		$this->name = "nombre vacio";
		$this->color = "color vacio";
		echo "</br></br>=========================</br>";
		echo "</br>Destructor</br>";
		echo $this->name;
		echo "</br>";
		echo $this->color;
		echo "</br>=========================</br></br>";

	}

	public function imprimir() {
		echo "</br></br>=========================</br>";
		echo "</br>Metodo</br>";
		echo $this->name;
		echo "</br>";
		echo $this->color;
		echo "</br>=========================</br></br>";
	}
}

$apple = new Fruit("Apple", "red");
$apple->imprimir();
$apple->imprimir();
$apple->imprimir();
$apple->imprimir();
?>