<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://mongodb:27017", ['username' => 'root', 'password' => 'root']);
$collection = $client->mongo_test->kyujin;

$cursor = $collection->find();

foreach ($cursor as $document) {
    var_dump($document);
}