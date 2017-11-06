<?php 
//sessions example

session_start();

if (isset($_SESSION['name'])) {
	echo "Name: ".$_SESSION['name'];
	echo "<br>Email: ".$_SESSION['email'];
	echo '<br><a href="session-logout.php">Logout</a>';
} else { 
	echo "Not Logged in";
	echo '<br><a href="sessions1.php">LOGIN</a>';
}
?>