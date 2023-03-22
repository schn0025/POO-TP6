<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Person.php";
require_once "Date.php";
require_once "Event.php";
require_once "Meeting.php";

// fonction d'autre ex
function decodeBooleen(bool $boul): string
{
    $rep = "Faux";
    if ($boul)
        $rep = "Vrai";
    return $rep;
}

//question 3
echo "\n question 3\n";
$date = new Date(20,3,2023);
$date2 = new Date(10,11,2004);
var_dump($date);
var_dump($date2);

//question 4
echo "\n question 4\n";
echo $date,"\n";
echo $date2,"\n";

//question 6
echo "\n question 6\n";
echo decodeBooleen($date->isAfter($date2)),"\n";
echo decodeBooleen($date->isBefore($date2)),"\n";
echo decodeBooleen($date2->isAfter($date)),"\n";
echo decodeBooleen($date2->isBefore($date)),"\n";

/*
//question 8
echo "\n question 8\n";
$event = new Event(22,10,23);
var_dump($event);

//question 9
echo "\n question 9\n";
echo $event->getDate(),"\n";
*/

//question 14
echo "\n question 14\n";
$toto = new Person('tutu','toto',45);
$meet = new Meeting(10,22,23,$toto,'ici',False);
var_dump($meet);

//question 15
echo "\n question 15\n";
echo decodeBooleen($meet->getMorning()),"\n";

//question 16
echo "\n question 16\n";
echo $meet->getDescription(),"\n";