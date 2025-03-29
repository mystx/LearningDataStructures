<?php
Class Node{

    private $val, $next;

    public function __construct($val)
    {
        $this->val = $val;
        $this->next = null;
    }

    public function push(Node $node)
    {
        if(!isset($this->next)) {
            $this->next = $node;
        } else {
            $this->next->push($node);
        }
    }

    public function setNextNull()
    {
        $this->next = null;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }

    public function setVal($val)
    {
        $this->val = $val;
    }

    public function getVal()
    {
        return $this->val;
    }
}

Class SinglyLinkedList {

    private $head;
    private $tail;
    private $length;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
        $this->length = 0;
    }

    public function push($data)
    {
        $newNode = new Node($data);

        if(!isset($this->head)) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail = $newNode;
            $this->head->push($newNode);
        }

        $this->length++;
        return $this;
    }

    public function getHead()
    {
        return $this->head;
    }

    public function getTail()
    {
        return $this->tail;
    }

    public function traverse()
    {
        $current = $this->head;
        while(!is_null($current)) {
            var_dump($current->getVal());
            $current = $current->getNext();
        }
    }

    public function pop()
    {
        $current = $this->head;
        $prev = $current;
        while(!is_null($current)) {

            if(!is_null($current->getNext())) {
                $prev = $current;
            } else {
                $prev->setNextNull();
            }
            
            $current = $current->getNext();
        }

        $this->tail = $prev;
        $this->length--;

        if($this->length == 0)
        {
            $this->head = null;
            $this->tail = null;
        }
        return $prev;
   }

   public function shift()
   {
        if($this->length == 0) return null;

        $head = $this->head;
        $this->head = $head->getNext();
        $this->length--;

        if($this->length == 0)
        {
            $this->head = null;
            $this->tail = null;
        }

        return $head;
   }

   public function unshift($data)
   {
        $newNode = new Node($data);
        if($this->length == 0)
        {
            $this->head = $newNode;
            $this->tail = $newNode;
        }

        $newNode->setNext($this->head);
        $this->head = $newNode;
        $this->length++;
        return $this;
   }

   public function get(int $number)
   {
        if($this->length==0) return null;
        $node = $this->head;
        for($i=0;$i<$number;$i++){
            $node = $node->getNext();
        }
        return $node;
   }

   public function set(int $index, $value)
   {
        $search = $this->get($index);
        $search->setVal($value);
        return $search;
   }

   public function insert(int $index, $value)
   {
        $newNode = new Node($value);
        if($index < 0 || $index > $this->length) {
            return false;
        }

        if($index == $this->length) {
            return $this->push($value);
        }

        if($index == 0) {
            return $this->unshift($value);
        }

        $find = $this->get($index-1);
        $previousNext = $find->getNext();
        $newNode->setNext($previousNext);
        $find->setNext($newNode);
        

        $this->length++;
        return true;
   }

   public function remove(int $index)
   {
        if($index<0 || $index>$this->length) return false;

        if($index == $this->length-1) return $this->pop();

        if($index == 0) return $this->shift();

        $prevNode = $this->get($index-1);
        $removed = $prevNode->getNext();
        $prevNode->setNext($removed->getNext());

        $this->length--;

        return $prevNode;
   }

   public function reverse()
   {
        $node = $this->head;
        $head = $this->head;
        $tail = $this->tail;
        $this->head = $tail;
        $this->tail = $head;

        $next = '';
        $prev = null;
        for($i=0;$i<$this->length;$i++)
        {
            $next = $node->getNext();
            $node->setNext($prev);
            $prev = $node;
            $node = $next;
        }

        return $this;
   }
}

$singly_linked_list = new SinglyLinkedList();
$singly_linked_list->push("Hi");
$singly_linked_list->push("There");
$singly_linked_list->push("You");

$singly_linked_list->reverse();
$singly_linked_list->traverse();