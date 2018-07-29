<?php
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
$util = new RouterOS\Util(
    $client = new RouterOS\Client('192.168.88.1', 'admin', 'password')
);
$util->setMenu('/ip arp');
$util->set(
    $util->find(
        0,
        function ($response) {
            //Matches any item with a comment that starts with two digits
            return preg_match('/^\d\d/', $response->getArgument('comment'));
        }
    ),
    array(
        'address' => '192.168.88.103'
    )
);