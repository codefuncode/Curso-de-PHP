 <?php
class Fruit {
	// Properties
	public $name;
	public $color;
	function __construct($name) {
		$this->name = $name;
		echo "$this->name </br>";
	}
	// Methods
	function set_name($name) {
		$this->name = $name;
	}
	function get_name() {
		return $this->name;
	}
}

$apple = new Fruit("Apple 1");
$banana = new Fruit("Banana 1");

$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>