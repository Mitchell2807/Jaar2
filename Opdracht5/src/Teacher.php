<?php

namespace Opdracht5;

class Teacher extends Person
{
    private $function;
    private $name;
    private $paid;
    public static $teachers=[];

    public function __construct($voornaam, $achternaam, $paid)
    {
        parent::__construct($voornaam, $achternaam);
        $this->paid=$paid;
    }


    public static function addTeacher($teacher)
    {
        self::$teachers[]=$teacher;
    }

    public function getPaid()
    {
        return "&euro;".$this->paid;
    }
}