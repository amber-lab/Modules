<?php
require '../vendor/autoload.php';
$hosts = [
    'localhost:9200' 
];

$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();

$params = [
	'scroll' => '30s',
	'size' => 50,
	'index' => 'my_index',
	'body' => [
		'query' => ['match_all' => new strClass()]
	]
];

$result = $client->search($params);
while(isset($response['hits']['hits']) and count($response['hits']['hits']) > 0){
	$response = $client->scroll([
		'body' => [
			'scroll_id' => $response['_scroll_id'],
			'scroll' => '30s'
		]
	]);
}
?>