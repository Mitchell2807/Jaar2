<?php

namespace Opdracht4;

class Patient extends Person
{

    public static $patients=[];
    private $patientNr;

public function __construct($name,$eyes, $hair, $length, $weight,$patientNr)
{
    parent::setName($name);
    parent::setEyes($eyes);
    parent::setHair($hair);
    parent::setLength($length);
    parent::setWeight($weight);
    $this->patientNr=$patientNr;
}

public function getPatientNr()
{
   return $this->patientNr;
}

public static function addPatient($patient)
{
    self::$patients[]=$patient;
}
}