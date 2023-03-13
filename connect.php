<?php
	#CONNECT YRU
	// $servername = "106465010.student.yru.ac.th";
	// $database = "106465010_db";
	// $username = "106465010_db";
	// $password = "6231280018.";


	$servername = "localhost";
	$database = "authen";
	$username = "root";
	$password = "123456789";

	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection

	if (mysqli_connect_errno()) {
		die("Connection failed: " . mysqli_connect_errno());
	}
	mysqli_set_charset($conn, "utf8");
	date_default_timezone_set('Asia/Bangkok');
?>


