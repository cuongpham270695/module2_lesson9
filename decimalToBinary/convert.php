<?php
include "stack.php";
function convert($num){
    $stack = new Stack(25);
    while($num>0){
        $i = $num%2;
        $stack->push($i);
        $num = floor($num/2);
    }
//    echo "<pre>";
//    var_dump($stack->stack);
//    echo "<hr>";
return $stack->stack;
}
$result = convert(150);
echo implode($result);

