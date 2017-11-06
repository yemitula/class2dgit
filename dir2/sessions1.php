<?php 
//sessions example

session_start();

$_SESSION['name'] = "Yemi Adetula";
$_SESSION['email'] = "yemitula@gmail.com";

echo "Session Set";

echo '<br><a href="sessions2.php">View Next Page</a>';
?>