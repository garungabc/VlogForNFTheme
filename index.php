<?php

use Elastica\Client;
use Monolog\Handler\ElasticSearchHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
require __DIR__ . '/src/bootstrap/app.php';

$config = [
    'host' => "localhost",
    'port' => "9200"
];

$client  = new Client($config);
$options = [
    'index' => 'localhost',
    'type'  => 'doc',
];
$handler = new ElasticSearchHandler($client, $options, Logger::INFO);

$log     = new Logger('application');
$log->pushHandler($handler);
$log->info('ahihi 1234');
