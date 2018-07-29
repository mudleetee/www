<?php

// ดู Number Of Connected Clients (from the registration table)
require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('192.168.77.1', 'admin', 'totwinet')) {      // Change this as necessery


 $API->write('/interface/wireless/registration-table/print',false);
 $API->write('=count-only=');

   $READ = $API->read(false);
   $ARRAY = $API->parseResponse($READ);


	echo "Number of connected clients:" . substr($READ[1],5);

   $API->disconnect();

}

?>