<?php
// $matriz1 = array(
// 	"1" => "hjdf",
// );
// $matriz1 = array("1");

function ejemplo1() {

	$array1 = array(
		"a" => "green",
		"b" => "brown",
		"c" => "blue",
		"red",
	);
	$array2 = array(
		"a" => "green",
		"yellow",
		"red",
	);
	$result = array_diff_assoc(
		$array1,
		$array2
	);
	print_r(
		$result
	);
}
ejemplo1();
echo "<br/>=============================================<br/>";
function ejemplo2() {
	$array1 = array(
		"a" => "green",
		"b" => "brown",
		// "c" => "blue",
		"red",
		"yellow",
		"blue",
	);
	$array2 = array(
		"a" => "green",
		"yellow",
		"blue",
		"red",
	);
	$result = array_diff_assoc(
		$array1,
		$array2
	);
	print_r(
		$result
	);
}
ejemplo2();
echo "<br/>=============================================<br/>";
function ejemplo3() {
	$array1 = array(
		"a" => "green",
		"b" => "brown",
		// "c" => "blue",
		"red",
		"yellow",
		"blue",
	);
	$array2 = array(
		"a" => "green",
		"red",
		"yellow",
		"blue",
	);
	$result = array_diff_assoc(
		$array1,
		$array2
	);
	print_r(
		$result
	);
}
ejemplo3();
echo "<br/>=============================================<br/>";
