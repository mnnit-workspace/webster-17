<?php
	
	/* function functionName($argument1,$argument2){
		code to be executed
	}
	*/

	function greet($name){
		echo "Welcome ".$name."<br>" ;
	}

	greet("Harshit");


	/*function functionName($name="xyz"){
		code to be executed
	}
	*/

	function greet2($name="xyz"){
		echo "Welcome again ".$name."<br>";
	}

	greet2("Harshit");
	greet2();


	function sum($x,$y){
		$z = $x + $y;
		return $z;
	}

	echo "Sum of 4 and 5 is ".sum(4,5);
?>