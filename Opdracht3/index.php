<?php

include ('Product.php');
include ('Music.php');
include ('Film.php');
include('Game.php');
include ('productlist.php');

$music1= new Music('Thriller',15, 1.21,'dvd','music',10);
$music2= new Music('Bohemian Rhapsody',15, 21,'dvd2','music',10);

$film1= new Film('Escape Room',25,1.21,'Film','film',10);
$film2= new Film('Bohemian Rhapsody movie',25,1.21,'Film','film',10);

$game1= new Game('Fifa 19', 60, 1.21, 'Game','game',10);
$game2= new Game('Red dead redemption 2', 60, 1.21, 'Game','game',10);

$list1 = new Productlist();
$list1->addProduct($music1);
$list1->addProduct($music2);

$list1->addProduct($film1);
$list1->addProduct($film2);

$list1->addProduct($game1);
$list1->addProduct($game2);

print $list1->getProducts();