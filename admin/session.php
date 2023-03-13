<?php
	session_start();
	include('../connect.php');
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:../');
    exit();
	}
	
	$sql= "SELECT * FROM user_login WHERE idcard ='".$_SESSION['id']."'";
	$query = mysqli_query($conn,$sql);
	$row =mysqli_fetch_array($query);

	if ($row['status_users']!='admin'){
		header('location:../');
		exit();
	}
	
	$user=$row['idcard'];
?>