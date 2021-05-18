<?php

require '../vendor/autoload.php';
$hosts = [
    'localhost:9200' 
];

$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();
$json = '{
		"query" : {
			"match_all" : {}
		}
	}';

$params = [
	'index' => 'test',
	'body' => $json
];

$result = $client->search($params);
var_dump($result);

?>