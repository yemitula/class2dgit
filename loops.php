<?php 
$x=6; //initialization
while($x<=5)
  {
  echo "The number is: $x <br>";
  $x++; //increment x
  } 
?>
<?php 
$x=0; 
do
  {
  $x++;
  echo "The number is: $x <br>";
  }
while ($x<=5)
?>
<?php 
for ($x=25; $x<=50; $x++)
  {
  echo "The number is: $x <br>";
  } 
?>
<?php 
$colors = array("red","green","blue","yellow"); 
foreach ($colors as $value)
  {
  echo "my color is $value<br>";
  }
?>
