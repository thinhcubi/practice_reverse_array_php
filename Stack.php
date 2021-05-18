<?php

class Stack
{
    public array $stack;
    public function __construct()
    {
        $this->stack= [];
    }
    public function push($index)
    {
        array_unshift($this->stack,$index);
    }
    public function pop(){
        array_shift($this->stack);
    }
}