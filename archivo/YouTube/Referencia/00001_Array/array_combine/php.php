<?php
$a = array('nombre', 'tel', 'mail');
$b = array('Carlos', '9392777333', 'caleman9791@gmail.com');
$c = array_combine($a, $b);

print_r($c);
echo "<br/>";
echo $c["nombre"];
echo "<br/>";
echo $c["tel"];
echo "<br/>";
echo $c["mail"];

?>