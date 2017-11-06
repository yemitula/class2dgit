<?php 
//this program determines if a number is prime

//supply the number
$n = 97;

//let the number be prime
$isPrime = true;

//from 2 to N/2
for($i=2; $i<=floor($n/2);$i++) {
	//if there is no remainder after division
	if($n % $i == 0) {
		$isPrime = false;
		break;
	} //end of if
} //end of the loop

//display result
if ($isPrime) {
	echo "$n is a Prime Number";
} else {
	echo "$n is NOT a Prime Number";
}

?>