<?php

namespace Opdracht5;

class Student extends Person
{
    private $studentNr;
    private $paid;
    private $payment;
    public static $students =[];


    public function __construct($voornaam, $achternaam, $studentNr, $paid)
    {
        parent::__construct($voornaam,$achternaam);
        $this->studentNr=$studentNr;
        $this->paid=$paid;
    }
    public function getStudentNr()
    {
        return "Het studentnr is: ".$this->studentNr."<br>";
    }

    public function getPaid()
    {
        return "&euro;".$this->paid;
    }

    public static function addStudent($student)
    {
        self::$students[]=$student;
    }

}