<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "Stack is full! You cannot push anymore!";
        }
    }

    public function pop()
    {
        if (count($this->stack) === 0) {
            throw new RuntimeException("Stack is empty! You cannot delete!");
        } else if (count($this->stack) > 0) {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        $length = count($this->stack);
        return $this->stack[$length - 1];
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}