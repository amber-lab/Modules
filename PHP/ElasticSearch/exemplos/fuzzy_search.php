<?php
require '../vendor/autoload.php';
$hosts = [
    'localhost:9200' 
];

$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();

$params = [
	'index' => 'my_index',
	'body' =>[
		'query' => [
			'fuzzy' => [
				'name' => [
					'value' => 'harry'
				]
			]
		]
	]
]

$result = $client->search($params);
?>