<?php

namespace Opdracht4;

abstract class Staff extends Person
{
    public function __construct($name,$eyes, $hair, $length, $weight)
    {
        parent::setName($name);
        parent::setEyes($eyes);
        parent::setHair($hair);
        parent::setLength($length);
        parent::setWeight($weight);
    }
public abstract function salary($salary);
}