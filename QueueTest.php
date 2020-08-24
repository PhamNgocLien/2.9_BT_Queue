<?php
include_once 'Queue.php';

$queue = new Queue();
$queue->enqueue('Min');
$queue->enqueue('Max');
$queue->enqueue('brothers');
$queue->isEmpty();
$queue->dequeue();
$queue->dequeue();

echo '<pre>';
var_dump($queue->isEmpty());
print_r($queue->getValue());