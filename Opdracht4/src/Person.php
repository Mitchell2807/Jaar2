<?php

namespace Opdracht4;

abstract class Person
{
    private $name;
    private $eyes;
    private $hair;
    private $length;
    private $weight;

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name."<br>";
    }

    public function setEyes($eyes)
    {
        $this->eyes = $eyes;
    }

    public function getEyes()
    {
        return "Oogkleur: ".$this->eyes;
    }

    public function setHair($hair)
    {
        $this->hair = $hair;
    }

    public function getHair()
    {
        return "Haarkleur: ".$this->hair;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length."CM";
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight."KG";
    }
}
