<?php

abstract class formit
{
    protected $title;
    protected $text;
    protected $map;
    public function __set($name, $value)
    {
       $this->$name=$value;
    }


    abstract public function tabdil();


}














































