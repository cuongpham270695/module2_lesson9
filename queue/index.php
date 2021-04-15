<?php
include_once "queue.php";
$queue = new Queue();
$queue->enqueue(6);
$queue->enqueue(1);
$queue->enqueue(3);
$queue->dequeue();
$queue->dequeue();
var_dump($queue);
echo "<hr>";
var_dump($queue->isEmpty());
$queue->enqueue(7);
$queue->enqueue(5);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
echo "<hr>";
var_dump($queue->isEmpty());