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
    'body'  => [
        'query' => [
            'match' => [
                'job' => 'Dev'
            ]
        ]
    ]
];

$results = $client->info();
var_dump($results)

?>
