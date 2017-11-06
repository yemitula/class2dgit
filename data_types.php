<?php 
$x = 5985;
var_dump($x);

echo "<br>"; 
$x = -345; // negative number 
var_dump($x);

echo "<br>"; 
$x = 0x8C; // hexadecimal number
var_dump($x);

echo "<br>";
$x = 047; // octal number
var_dump($x);

echo "<br>";

$x = true;
var_dump($x);
echo "<br>";

$x = "true";
var_dump($x);
echo "<br>";

?>
<?php 
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
?>
<?php
class Car
{
  var $color;
  function Car($color="green") 
  {
    $this->color = $color;
  }
  function what_color() 
  {
    return $this->color;
  }
}

$myCar = new Car();
echo "<br>";
var_dump($myCar);

echo $myCar->what_color();

$redCar = new Car("red");
echo "<br>";
echo $redCar->what_color();
?>
<?php
echo "<br>";
echo strlen("Hello world!");
?>