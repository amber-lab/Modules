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
	'id' => '1',
	'body' => [
		'doc' =>[
			'age' => 24
		]
	]
];

$result = $client->update($params);
var_dump($result);




?>