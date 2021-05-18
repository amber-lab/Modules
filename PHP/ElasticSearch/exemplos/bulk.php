<?php

require '../vendor/autoload.php';
$hosts = [
    'localhost:9200' 
];

$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();

for($i=0; $i<100; $i++){
	$params['body'][] = [
		'index' => [
			'_index' => 'my_index',
		]
	];
	$params['body'][] = [
		'my_field' => 'my_value',
		'second_field' => 'some more values'
	];
}

$result = $client->bulk($params);

?>