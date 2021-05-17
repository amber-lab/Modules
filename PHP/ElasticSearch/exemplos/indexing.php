<?php
require '../vendor/autoload.php';
$hosts = [
    'localhost:9200' 
];

$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();


$params = [
	'index' => 'test_php',
	'id' => '10',
	'body' => ['testFielf' => 'abc']];

$result = $client->index($params);
var_dump($result);


?>