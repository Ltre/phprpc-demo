<?php
include ("lib/phprpc_client.php");
$client = new PHPRPC_Client('http://127.0.0.1/pub/phprpc/server/server.php');
echo $client->HelloWorld();
echo $client->caonima();
echo $client->shenjingbing();
echo $client->cao();
