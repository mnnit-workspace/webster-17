<?php

function print_array($array)
{
	$size = count($array);
	for($i=0;$i<$size;$i++)
	{
		echo $array[$i]." ";
	}
	echo "<br>";
}

function print_assoc($array)
{
	foreach ($array as $key => $value) {
		echo $key."=>".$value." ";
	}
	echo "<br>";
}

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_array($cars);

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
print_array($cars);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_assoc($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
print_assoc($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
print_assoc($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
print_assoc($age);


?>