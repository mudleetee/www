<?php
use PEAR2\Net\RouterOS;
// require_once 'PEAR2/Autoload.php';
require_once "../PEAR2_Net_RouterOS-1.0.0b6.phar";
// require_once 'PEAR2_Net_Transmitter-1.0.0a5.phar';
try {
    $client = new RouterOS\Client('192.168.77.1', 'admin', 'totwinet');
} catch (Exception $e) {
    die('Unable to connect to the router.');
    //Inspect $e if you want to know details about the failure.
}

$responses = $client->sendSync(new RouterOS\Request('/ip/arp/print'));


foreach ($responses as $response) {
    if ($response->getType() === RouterOS\Response::TYPE_DATA) {
        echo 'IP: ', $response->getProperty('address'),
        ' MAC: ', $response->getProperty('mac-address'),
        "\n";
    }
}

//Example output:
/*
IP: 192.168.88.100 MAC: 00:00:00:00:00:01
IP: 192.168.88.101 MAC: 00:00:00:00:00:02
 */
?>