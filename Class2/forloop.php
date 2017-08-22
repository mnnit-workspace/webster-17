<?php
	
	/* for(initialize;test;increment/decrement){
		code to be executed;
	}
	*/

	for($i=1;$i<=5;$i++)
	{
		echo $i."<br>";
	}

	/* foreach ($array as $value){
		code to be executed;
	}
	*/

	$branches = array("CSE","IT","ECE");
	foreach ($branches as $key => $value) {
		echo $key."=>".$value."<br>";
	}

?>