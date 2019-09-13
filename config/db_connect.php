<?php 
	
	// connect to database
	$conn = mysqli_connect('localhost', 'simon', 'Daemonhobo123', 'seto_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

 ?>