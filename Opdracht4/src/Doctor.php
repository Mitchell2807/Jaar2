<?php

namespace Opdracht4;


class Doctor extends Staff
{
    public static $doctors=[];
    public function salary($salary)
    {
        $this->doctorsalary=$salary;
    }

    public function __construct($name, $eyes, $hair, $length, $weight)
    {
        parent::__construct($name, $eyes, $hair, $length, $weight);
    }

    public static function addDoctors($doctor)
    {
        self::$doctors[]=$doctor;
    }
}