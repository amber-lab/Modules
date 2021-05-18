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
	'id' => '4'	
];

try{
	$result = $client->get($params);
	var_dump($result);
}catch(Missing404Exception $e) {
	echo "Document not found: %s\n", $e->getMessage();
}


?>