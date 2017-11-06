<?php
//this program finds the maximum of a list of numbers

//supply the list of numbers
$numbers = array(23, 4, 7, 14, 34, 12, 105, 15, 203, 50);

//set the first number as maximum
$max = $numbers[0];

//from the first number to the last number
for($i=0;$i<count($numbers);$i++) {
	//if current number is greater than max
	if ($numbers[$i] > $max) {
		//set the number as the max
		$max = $numbers[$i];
	} //end of the if
} //end of the loop

//display
echo "The Maxinum number is $max";

?>