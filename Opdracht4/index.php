<?php

require_once "vendor/autoload.php";

use Opdracht4\Person;
use Opdracht4\Patient;
use Opdracht4\Staff;
use Opdracht4\Doctor;
use Opdracht4\Nurse;
use Opdracht4\Appointment;


//patienten maken
$patient1=new Patient('Pieter Post', 'blauw','bruin',178,85, 001);
$patient2=new Patient('Elisabeth Hill', 'blauw','blond', 180, 75, 002);
$patient3=new Patient('Jochem de Kolibrie', 'groen','blond', 187, 90, 003);
$patient4=new Patient('Laura Hof', 'bruin','zwart', 168, 63, 004);

//doctors maken
$doctor1=new Doctor('Josh Swinkels', 'bruin', 'zwart', 190, 90);
$doctor2=new Doctor('Isa Smith', 'Groen', 'Blond', 169, 65);
$doctor3=new Doctor('Michel Bruine', 'Blauw', 'Rood', 180, 77);

//nurses maken
$nurse1=new Nurse('Sarah de Bloem', 'bruin', 'blond', 173, 68);
$nurse2=new Nurse('Kim Huize', 'brown', 'Rood', 183, 81);
$nurse3=new Nurse('Michelle Koorenaar', 'Groen', 'Zwart', 181, 78);

//afspraak 1 maken
$afspraak1= new appointment(001,"Afspraak1", "11:15", "12:45", "00:00", "00:00");
$afspraak1->addPatient($patient1);
$afspraak1->addDoctor($doctor1);

//afspraak 1 printen
print $afspraak1->getAppointmentId();
print $afspraak1->getPatients();
print $afspraak1->getDoctors();
print $afspraak1->getNurses();

//afspraak 1 printen tijden+salaris
print $afspraak1->getStarttimedoc();
print $afspraak1->getEndtimedoc();
print $afspraak1->getStarttimenur();
print $afspraak1->getEndtimenur();
print $afspraak1->getTimedoc();
print $afspraak1->getTimenur();
print $afspraak1->getDoctorsalary();
print $afspraak1->getNursesalary();
print $afspraak1->getPayment();

//afspraak 2 maken
$afspraak2= new appointment(002,"Afspraak2", "10:00","12:00","10:00","12:00");
$afspraak2->addPatient($patient2);
$afspraak2->addDoctor($doctor2);
$afspraak2->addNurse($nurse1);

//afspraak 2 printen
print $afspraak2->getAppointmentId();
print $afspraak2->getPatients();
print $afspraak2->getDoctors();
print $afspraak2->getNurses();

//afspraak 2 printen tijden+salaris
print $afspraak2->getStarttimedoc();
print $afspraak2->getEndtimedoc();
print $afspraak2->getStarttimenur();
print $afspraak2->getEndtimenur();
print $afspraak2->getTimedoc();
print $afspraak2->getTimenur();
print $afspraak2->getDoctorsalary();
print $afspraak2->getNursesalary();
print $afspraak2->getPayment();