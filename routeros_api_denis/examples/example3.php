<?php

/* Example for adding a VPN user */

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.77.1', 'admin', 'totwinet')) {

   $API->comm("/ppp/secret/add", array(
      "name"     => "user",
      "password" => "pass",
      "remote-address" => "172.16.1.10",
      "comment"  => "{new VPN user}",
      "service"  => "pptp",
   ));

   $API->disconnect();

}

?>