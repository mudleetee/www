<?php 
	include 'config.php';
	$id = $_POST['id'];
	// echo $id;
	// $id = 20;
	$DB->Query("DELETE FROM messages WHERE id ='$id'"); 
	// echo $id;
 ?>