<?php
include_once "Stack.php";

$stk = new Stack();
$stk->push(3);
$stk->push(4);
$stk->push(5);
$stk->pop();


var_dump($stk);