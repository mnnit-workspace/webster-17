<?php 

	$branches = array("CSE","IT","ECE","MECH");
	$size = count($branches);
	for($i=0;$i<$size;$i++)
	{
		echo $branches[$i]."<br>";
	}


	$ages = array("CSE"=>8.5,"IT"=>8,"MECH"=>8);
	foreach ($ages as $key => $value) {
		echo $key."=>".$value."<br>";
	}

?>