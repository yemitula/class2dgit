<?php 
//this program calculates the average of a list of numbers

//supply the list of numbers
$numbers = array(23, 4, 7, 14, 34, 12, 105, 15, 203, 50);

//add the number

//initialize the sum
$sum = 0;

//loop through the numbers
for($i=0;$i<count($numbers);$i++) {
	//add the current number to the sum
	$sum += $numbers[$i];
} //end of loop

//calculate the average
$average = $sum/count($numbers);

//display the average
echo "The average of the number is $average";
?>