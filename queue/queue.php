<?php
include_once "node.php";

class Queue
{
    public $front;
    public $back;

    public function isEmpty()
    {
        return empty($this->front == NULL);
    }

    public function enqueue($data)
    {
        if ($this->isEmpty()) {
            $node = new Node();
            $this->front = $node;
            $this->back = $node;
            $node->next = NULL;
        } else {
            $currentBack = $this->back;
            $this->back = new Node();
            $this->back->value = $data;
            $currentBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return "Can't delete! Please insert something!";
        }
        $remove = $this->front->value;
        $this->front = $this->front->next;
        return $remove;
    }
}