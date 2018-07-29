<?php 
	// require 'libs/mysqli.class.php';
	include('libs/mysqli.class.php');
	$config = array();
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['pass'] = 'totwinet';
	$config['table'] = 'jquery';

	$db = new DB($config);
	$db->query("SELECT * FROM pages");
	// echo $db->get('title');

	$result = $db->get();
	echo json_encode($result);	
	// echo '<pre>';
	// print_r($result);
	// echo json_encode($db->get());
?>
