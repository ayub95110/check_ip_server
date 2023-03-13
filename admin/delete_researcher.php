<?php
include '../connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM ip WHERE id = $id ";
mysqli_query($conn, $sql);


header('location:list_researcher.php');
 
?>