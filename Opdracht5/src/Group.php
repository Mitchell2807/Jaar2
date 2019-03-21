<?php

namespace Opdracht5;

class Group
{
    private $name;
    private $students=[];
    private $teachers=[];
    private $totalpaid;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addStudent($student)
    {
        $this->students[]=$student;
    }

    public function addTeacher($teacher)
    {
        $this->teachers[]=$teacher;
    }

    public function getStudents()
    {
        $print="<table border='1'>";
        foreach ($this->students as $student)
        {
            $print .="<tr><td>".$student->getFirstname();
            $print .=$student->getLastname()."</td>";
            $print .="<td>".$this->name."</td>";
            $print .="<td>".$student->getPaid()."</td></tr>";
        }
        $print.="<table>";
        return$print;
    }

    public function setTotalpaid($paid)
    {
        $this->totalpaid = count($paid) * 20;
    }

    public function getTotalpaid()
    {
        return "totaal: ".$this->totalpaid;
    }

    public function getTeachers()
    {
        foreach ($this->teachers as $teacher) {
            return $this->teachers;
        }
    }

}