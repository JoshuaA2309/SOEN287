<?php
	$conn = new mysqli("localhost","root","","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}

// $conn = simplexml_load_file("cart_system.xml") or die("Failed to load");
 

?> 