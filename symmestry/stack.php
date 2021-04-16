<?php

class Stack
{
    public $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($obj)
    {
        if (count($this->stack) == 0) {
            array_unshift($this->stack, $obj);
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty";
        } else {
            array_shift($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}