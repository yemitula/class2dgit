<?php 
//sessions example

session_start();

unset($_SESSION['name']);
unset($_SESSION['email']);
echo '<br><a href="sessions2.php">Back to Page</a>';
?>