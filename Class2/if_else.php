<?php

	/*if(condition){
		code to be executed
	}
	*/
	$a = 5;
	$b = 6;

	if($a>=$b){
		echo "a is greater than or equal to b<br>";
	}
	


	/*if(condition){
		code to be executed if condition is true
	}
	else{
		code to be executed if condition is false
	}
	*/

	if($a>$b){
		echo "a is greater than b<br>";
	}
	else{
		echo "a is less than or equal to b<br>";
	}


	/*if(condition1){
		code to be executed if condition1 is true
	}
	else(condition2){
		code to be executed if condition2 is true 
	}
	else{
		code to be executed if all the above conditions are false
	}*/

	if($a==$b){
		echo "a is equal to b<br>";
	}
	elseif($a>$b){
		echo "a is greater than b<br>";
	}
	else{
		echo "a is less than b<br>";
	}


		

?>