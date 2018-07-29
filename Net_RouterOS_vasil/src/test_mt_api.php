<?php
use PEAR2\Net\RouterOS;

require_once 'PEAR2_Net_RouterOS-1.0.0b6.phar';
try {
    $client = new RouterOS\Client('192.168.77.1', 'admin', 'totwinet');
    echo 'OK';
} catch (Exception $e) {
    die($e);
}