<?php
	require('../routeros_api.class.php');
	$API = new RouterosAPI();
	$API->debug = true;
	if ($API->connect('192.168.77.1', 'admin', 'totwinet')) {
	   $API->write('/interface/getall');
		// $API->write('/interface ip address print');
	   $READ = $API->read(false);
	   $ARRAY = $API->parseResponse($READ);
	   print_r($ARRAY);
	   $API->disconnect();
	}
?>
