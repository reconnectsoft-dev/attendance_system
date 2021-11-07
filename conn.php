<?php
	$conn = new mysqli('localhost', 'root', '', 'apsystem');
	// $conn = new mysqli('localhost', 'reconnec_attendance', 'Reconnectsoft@2021', 'reconnec_employee');



	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>