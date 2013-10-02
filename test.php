<?php

$GLOBALS['PHP_IMPALA_CLASSMAP'] = require_once 'lib/autoload_classmap.php';
spl_autoload_register(function ($class) {
	if(array_key_exists($class, $GLOBALS['PHP_IMPALA_CLASSMAP'])) {
		require $GLOBALS['PHP_IMPALA_CLASSMAP'][$class];
	}
});

use Thrift\Transport\TBufferedTransport;
use Thrift\Transport\TSocket;
use Thrift\Protocol\TBinaryProtocol;

$socket = new TSocket('127.0.0.1', 50000);
$transport = new TBufferedTransport($socket);
$transport->open();
$protocol = new TBinaryProtocol($transport);
$client = new ImpalaServiceClient($protocol);

$query = new Beeswax\Query();
$query->query = 'SHOW TABLES';

$queryHandle = $client->query($query);

$result = $client->fetch($queryHandle, false, 100);

var_dump($result);

?>
