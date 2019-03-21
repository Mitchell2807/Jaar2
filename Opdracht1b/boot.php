<?php
include ('House.php');
include ('Room.php');

//kamers maken
$kamer1 = new Room(3,3,3);
$kamer2 = new Room(4,3,2.5);
$kamer3 = new Room(5,5,3);
$kamer4 = new Room(3,5,4);
$kamer5 = new Room(4,4,4);
$kamer6 = new Room(6,7,4);
$kamer7 = new Room(5,4,5);


//huizen maken
 $huis1 = new House();
 $huis1->addPricepermeter(2500);
 $huis1->addRoom($kamer1->getVolume());
$huis1->addRoom($kamer3->getVolume());
$huis1->addRoom($kamer4->getVolume());

$huis2 = new House();
$huis2->addPricepermeter(3000);
$huis2->addRoom($kamer3->getVolume());
$huis2->addRoom($kamer6->getVolume());
$huis2->addRoom($kamer7->getVolume());

$huis3 = new House();
$huis3->addPricepermeter(2000);
$huis3->addRoom($kamer2->getVolume());
$huis3->addRoom($kamer5->getVolume());

//print op scherm
print 'Huis 1: <br>';
print $huis1->getHouse();
print"<br>";
print"<br>";
print 'Huis 2: <br>';
print $huis2->getHouse();
print"<br>";
print"<br>";
print 'Huis 3: <br>';
print $huis3->getHouse();
