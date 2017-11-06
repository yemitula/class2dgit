<?php

/* THIS IS ON GIT */
echo date("Y/m/d") . "<br>"; //2014/02/23
echo date("Y.m.d") . "<br>"; //2014.02.23
echo date("Y-m-d"); //2014-02-23
echo "<br>";
//1 display today's date as Sunday, 23rd February, 2014
echo date("l, jS F, Y"); 
echo "<br>";
//2 display today's date as 23-Feb-2014
echo date("j-M-Y");
echo "<br>";
//3 display 19/05/2014 as Sunday, 19th May, 2014
echo date("l, jS F, Y",strtotime("2014-05-19"));
?>
