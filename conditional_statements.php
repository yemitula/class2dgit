<?php
$t=date("H");
if ($t<12) //if it is not yet 8pm
  {
  echo "Have a good morning!";
  echo "<br>Thank you";
  } elseif ($t < 20) {
	  echo "Have a good day";
  } else {
	  echo "Good night!";
  }
?>