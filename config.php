<?php 
    $db = new mysqli('localhost','root','','sit780');
 	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error(); exit;
	}
?>