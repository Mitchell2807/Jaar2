<?php

namespace Opdracht4;

class Nurse extends Staff
{
    public static $nurses=[];
    public function salary($salary)
    {
        $this->nursesalary=$salary;
    }

    public function __construct($name, $eyes, $hair, $length, $weight)
    {
        parent::__construct($name, $eyes, $hair, $length, $weight);
    }

    public static function addNurses($nurse)
    {
        self::$nurses[]=$nurse;
    }
}