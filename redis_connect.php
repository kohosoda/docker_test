<?php

$redis = new Redis();
$redis->connect('redis', 6379);

$redis->set('test_key', 'test_value');
echo "test_key : " . $redis->get('test_key') . "\n";
$redis->del('test_key');

$redis->close();