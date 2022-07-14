<?php
// Array representing a possible record set returned from a database
$records = array(
	array(
		'id' => 2135,
		'first_name' => 'John',
		'last_name' => 'Doe',
	),
	array(
		'id' => 3245,
		'first_name' => 'Sally',
		'last_name' => 'Smith',
	),
	array(
		'id' => 5342,
		'first_name' => 'Jane',
		'last_name' => 'Jones',
	),
	array(
		'id' => 5623,
		'first_name' => 'Peter',
		'last_name' => 'Doe',
	),
);

$first_names = array_column($records, 'first_name');
echo "<br/>============================================== 1 <br/>";

print_r($first_names);
echo "<br/>============================================== 1 <br/>";
// //////////////////////////////////////////////////////////

$nombres = [];
for ($i = 0; $i < count($records); $i++) {

	if ($records[$i]["first_name"] == "Peter") {
		$nombres[$i] = $records[$i]["first_name"];
	} else {

	}

	// array_push($nombres, $records[$i]["first_name"]);
}

echo "<br/>============================================== 2 <br/>";

print_r($nombres);
echo "<br/>============================================== 2 <br/>";
// //////////////////////////////////////////////////////////

?>