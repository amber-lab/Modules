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
	'id' => 1,
	'client' => [
		'future' => 'lazy'
	]
];

$future = $client->get($params);

$doc = $future['_source'];

#resolution with wait()

$futures = [];

for ($i = 0; $i < 1000; $i++) {
	$params = [
		'index' => 'test',
		'id' => $i,
		'client' => [
			'future' => 'lazy'
		]
	];
	$futures[] = $client->get($params);
}

$futures[999]->wait();

?>