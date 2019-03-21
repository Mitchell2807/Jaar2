<?php

require_once "vendor/autoload.php";

use Opdracht5\Person;
use Opdracht5\Teacher;
use Opdracht5\Student;
use Opdracht5\Group;

$docent1 = new Teacher("Frans", "Wekker", 0);

$student1 = new Student("Jan","Janssen" ,123456,20);
$student2 = new Student("Klaas","Vaak" ,123477,20);
$student3 = new Student("Henk","de Schoon" ,1234455,20);
$student4 = new Student("Piet","Heer" ,1234578,20);
$student5 = new Student("Sjors","Boom" ,123453,20);
$student6 = new Student("Jamie","Olijf" ,143457,20);
$student7 = new Student("Sara","de Bocht" ,234655,20);
$student8 = new Student("Lara","Weg" ,1234599,0);
$student9 = new Student("Yvonne","Smeets" ,123450,20);
$student10 = new Student("Youri","Kortom" ,123444,20);
$student11= new Student("Jessie","Raket" ,125555,20);
$student12= new Student("James","Gracht" ,234987,20);
$student13= new Student("Cindy","de Hagel" ,45612,0);
$student14= new Student("Sjoerd","Bergaf" ,109812,0);
$student15= new Student("Jochem","de Kolibrie" ,443355,20);
$student16= new Student("Peter","van den Achterhoek" ,145231,20);
$student17 = new Student("Erdem","Roskam" ,234567,20);
$student18= new Student("Yordi","Dols" ,234568,20);
$student19= new Student("Calista","van Amelsvoort" ,234569,20);
$student20= new Student("Emke","Mens" ,234570,0);
$student21= new Student("Cornelia","Drop" ,234571,20);
$student22= new Student("Amber","van Wel" ,234572,20);
$student23= new Student("Charel","Biermans" ,234573,0);
$student24= new Student("Siem","van Maastricht" ,234574,20);
$student25= new Student("Rifka","Snip" ,234575,20);
$student26 = new Student("Rudy","Sluijk" ,234576,20);
$student27= new Student("Styn","Boele" ,234577,20);
$student28= new Student("Steffan","Dix" ,234578,20);
$student29= new Student("Dominik","van der Zwaan" ,234579,0);
$student30= new Student("Katherine","Matthews" ,234580,20);
$student31= new Student("Grace","Hall" ,234581,20);
$student32= new Student("Isabel","Moran" ,234582,20);


/*$apm1a=new Group("APM1A");
$apm1a->addStudent($student9);
$apm1a->addStudent($student10);
$apm1a->addStudent($student11);
$apm1a->addStudent($student12);
$apm1a->addStudent($student13);
$apm1a->addStudent($student14);
$apm1a->addStudent($student15);
$apm1a->addStudent($student16);
$apm1a->addStudent($student17);
$apm1a->addStudent($student18);
$apm1a->addStudent($student19);
$apm1a->addStudent($student20);
$apm1a->addStudent($student21);
$apm1a->addStudent($student29);
$apm1a->addStudent($student30);
$apm1a->addStudent($student31);
$apm1a->addStudent($student32);
*/

$apm2a=new Group("APM2A");
$apm2a->addStudent($student1);
$apm2a->addStudent($student2);
$apm2a->addStudent($student3);
$apm2a->addStudent($student4);
$apm2a->addStudent($student5);
$apm2a->addStudent($student6);
$apm2a->addStudent($student7);
$apm2a->addStudent($student8);
$apm2a->addStudent($student22);
$apm2a->addStudent($student23);
$apm2a->addStudent($student24);
$apm2a->addStudent($student25);
$apm2a->addStudent($student26);
$apm2a->addStudent($student27);
$apm2a->addStudent($student28);
$apm2a->addTeacher($docent1);

/*
Student::addStudent($student1);
Student::addStudent($student2);
Student::addStudent($student3);
Student::addStudent($student4);

var_dump(Student::$students);
*/

/*
print $apm1a->getName();
print $apm1a->getStudents();
print $apm1a->getTotalpaid();
print"<br>";
*/

print $apm2a->getName();
print $apm2a->getStudents();
print "Docent:";
print $docent1->getFirstname();
print $docent1->getLastname();
print $docent1->getPaid();
