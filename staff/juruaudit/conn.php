<?php
	$conn = new mysqli('localhost', 'root', '', 'qms');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>