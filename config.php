<?php
	require 'libs/mysqli.class.php';
	$config = array();
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['pass'] = 'totwinet';
	$config['table'] = 'db_winet';
	// $config['table'] = 'wb';

	session_start();

	$db = new DB($config);


?>