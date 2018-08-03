<?php
	require 'libs/mysqli.class.php';
	$config = array();
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['pass'] = 'totwinet';
	$config['table'] = 'messages';
	// $config['table'] = 'wb';

	session_start();

	$db = new DB($config);


?>