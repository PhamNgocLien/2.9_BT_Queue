<?php


class Queue
{
    private $value;

    public function __construct()
    {
        $this->value = array();
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function isEmpty()
    {
        if (count($this->value) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function enqueue($obj){
        array_push($this->value,$obj);
    }

    public function dequeue(){
        if (!$this->isEmpty()){
            array_shift($this->value);
        }
    }
}