<?php
function writeMsg()
{
echo "Hello world!";
}

writeMsg(); // call the function
echo "<br>";
echo "I am saying ";
writeMsg();
echo "<br>";

?>
<?php
function familyName($fname,$year = "1990")
{
	$age = date("Y") - $year; // subtract $year form current year
	echo "$fname Refsnes is $age years old <br>";
}

function getAge($year) {
	$age = date("Y") - $year; // subtract $year form current year
	return $age;
}

familyName("Yemi","1912");
familyName("Ibrahim","1978");
familyName("Michael","1983");
familyName("Demola");

$myAge = getAge("1956");
echo "<br>I am $myAge years<br>";
?>
