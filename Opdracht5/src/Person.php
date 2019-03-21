<?php

namespace Opdracht5;

abstract class Person
{
    private $firstname;
    private $lastname;


    public function __construct($voornaam, $achternaam)
    {
        $this->firstname=$voornaam;
        $this->lastname=$achternaam;
    }



    public function setFirstname($voornaam)
    {
        $this->firstname=$voornaam;
    }

    public function getFirstname()
    {
        return $this->firstname."<br>";
    }

    public function setLastname($achternaam)
    {
        $this->firstname=$achternaam;
    }

    public function getLastname()
    {
        return $this->lastname."<br>";
    }

    //public abstract function money($money);

}
