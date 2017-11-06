<?php 
//this program searchs a list of numbers for a number and displays the location/index if found
//disaplys NOT found otherwise

//supply the list of numbers
$numbers = array(23, 4, 7, 14, 34, 12, 105, 15, 203, 50);

//supply the search item
$item = 1212;

//assume item is NOT in the list
$itemNotFound = true;

//loop through the array
foreach ($numbers as $index=>$number) {
	//if the current number is equal to the search item
	if($number == $item) {
		echo "$item found in location $index!";
		$itemNotFound = false;
		break;
	} //end of if
} //end of loop

//item not found
if ($itemNotFound) echo "$item NOT found!";
?>