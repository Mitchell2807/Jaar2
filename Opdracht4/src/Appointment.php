<?php

namespace Opdracht4;

class Appointment
{
    private $appointmentId;
    private $patients=[];
    private $doctors=[];
    private $nurses=[];
    private $starttimedoc;
    private $endtimedoc;
    private $starttimenur;
    private $endtimenur;
    private $timedoc;
    private $timenur;
    private $hourwage=15;
    private $doctorsalary;
    private $nursesalary;
    private $payment;

    public function __construct($appointmentId,$name,$starttimedoc, $endtimedoc, $starttimenur,$endtimenur)
    {
        $this->appointmentId=$appointmentId;
        $this->name=$name;
        $this->starttimedoc=$starttimedoc;
        $this->endtimedoc=$endtimedoc;
        $this->starttimenur=$starttimenur;
        $this->endtimenur=$endtimenur;
        $this->timedoc=(strtotime($this->endtimedoc)-strtotime($this->starttimedoc)) /3600 ;
        $this->timenur=(strtotime($this->endtimenur)-strtotime($this->starttimenur)) /3600 ;

        $this->doctorsalary=$this->timedoc*$this->hourwage;
        $this->nursesalary=$this->timenur*$this->hourwage + 400;
        $this->payment=(strtotime($this->endtimedoc)-strtotime($this->starttimedoc)) /3600 * 100 ;
    }

    public function addPatient($patient)
    {
        $this->patients[]=$patient;
    }

    public function addDoctor($doctor)
    {
        $this->doctors[]=$doctor;
    }

    public function addNurse($nurse)
    {
        $this->nurses[]=$nurse;
    }

    public function getAppointmentId()
    {
        return "afspraakID: ".$this->appointmentId;
    }

    public function getPatients()
    {
        foreach ($this->patients as $patient) {
            return "<br>Naam patiënt: " . $patient->getName();
        }
    }

    public function getDoctors()
    {
        foreach ($this->doctors as $doctor) {
            return "Naam dokter: " . $doctor->getName();
        }
    }

    public function getNurses()
    {
        foreach ($this->nurses as $nurse)
        {
                return "Naam Verpleegster: " . $nurse->getName();
        }
    }

    public function getStarttimedoc()
    {
        return"Starttijd dokter: ".$this->starttimedoc."<br>";
    }

    public function getEndtimedoc()
    {
        return"Eindtijd dokter: ".$this->endtimedoc."<br>";
    }

    public function getStarttimenur()
    {
        return"Starttijd Verpleegster: ".$this->starttimenur."<br>";
    }

    public function getEndtimenur()
    {
        return"Eindtijd verpleegster: ".$this->endtimenur."<br>";
    }

    public function getTimedoc()
    {
        return"Tijd gewerkt dokter: ".$this->timedoc."uur<br>";
    }

    public function getTimenur()
    {
        return"Tijd gewerkt verpleegster: ".$this->timenur."uur<br>";
    }

    public function setHourwage($hourwage)
    {
        $this->hourwage=$hourwage;
    }

    public function getHourwage()
    {
        return $this->hourwage;
    }

    public function getDoctorsalary()
    {
        return"Salaris dokter ".$this->name.": &euro;".$this->doctorsalary."<br>";
    }

    public function getNursesalary()
    {
        return "Salaris verpleegster: &euro;".$this->nursesalary."<br>";
    }

    public function getPayment()
    {
        return "Kosten patiënt: &euro;".$this->payment."<br><br>";
    }

}