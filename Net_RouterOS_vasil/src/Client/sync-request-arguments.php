<?php
use PEAR2\Net\RouterOS;
// require_once 'PEAR2/Autoload.php';
require_once '../PEAR2_Net_RouterOS-1.0.0b6.phar';
// require_once 'PEAR2_Net_Transmitter-1.0.0a5.phar';
try {
    $client = new RouterOS\Client('192.168.77.1', 'admin', 'totwinet');
} catch (Exception $e) {
    die('Unable to connect to the router.');
}

$addRequest = new RouterOS\Request('/ip/arp/add');
 
$addRequest->setArgument('address', '192.168.88.100');
$addRequest->setArgument('mac-address', '00:00:00:00:00:01');
if ($client->sendSync($addRequest)->getType() !== RouterOS\Response::TYPE_FINAL) {
    die("Error when creating ARP entry for '192.168.88.100'");
}
 
$addRequest->setArgument('address', '192.168.0.101');
$addRequest->setArgument('mac-address', '00:00:00:00:00:02');
if ($client->sendSync($addRequest)->getType() !== RouterOS\Response::TYPE_FINAL) {
    die("Error when creating ARP entry for '192.168.88.101'");
}
 
echo 'OK';