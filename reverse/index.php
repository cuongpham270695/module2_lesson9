<?php

$stack = new SplStack();
$stack ->push(15);
$stack ->push(23);
$stack->push(18);
$stack->push(7);
$stack->push(20);

var_dump($stack);
$reverse = [];
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
echo "<pre>";
var_dump($reverse);