<?php
include "node.php";

class Queue
{
    public $firstNode = NULL;
    public $lastNode = NULL;

    public function enqueue($obj)
    {
        if ($this->isEmpty()) {
            $this->firstNode = $obj;
            $this->lastNode = $obj;
        } else {
            $oldNode = $this->lastNode;
            $this->lastNode = $obj;
            $oldNode->next = $obj;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty! Cannot delete anymore!";
        } else {
            $front = $this->firstNode;
            $this->firstNode = $this->firstNode->next;
            return $front;
        }
    }

    public function isEmpty()
    {
        return empty($this->firstNode);
    }
}