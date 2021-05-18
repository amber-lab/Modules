<?php

require '../vendor/autoload.php';
$hosts = [
    'localhost:9200' 
];

$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();

$params = [
	'index' => 'test',
	'id' => '10',
];

$result = $client->delete($params);
var_dump($result);

?>