<?php

class Person 
{
    protected $first = "Pios";
    private $last = "X";
    private $age = "20";
}

class Pet extends Person
{
    public function owner()
    {
        $a = $this->first;
        return $a;
    }
}