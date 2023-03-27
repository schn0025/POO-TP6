<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Person.php";
require_once "Date.php";
require_once "Event.php";
require_once "Meeting.php";
require_once "Anniversary.php";
require_once "Calendar.php";
require_once "FilterDate.php";
require_once "FilterMeeting.php";
require_once "FilterAnd.php";

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
$meet = new Meeting(22,10,2023,$toto,'ici',False);
$meet2 = new Meeting(22,12,2023,$toto,'l\'a',True);
$meet3 = new Meeting(22,10,2023,$toto,'pasL\'a',False);
var_dump($meet);

//question 15
echo "\n question 15\n";
echo decodeBooleen($meet->getMorning()),"\n";

//question 16
echo "\n question 16\n";
echo $meet->getDescription(),"\n";
echo $meet;

//question 17
echo "\n question 17\n";
echo decodeBooleen($meet->coincide($meet2)),"\n";
echo decodeBooleen($meet->coincide($meet3)),"\n";

//question 19
echo "\n question 19\n";
$arthur = new Person('Schneider', 'Arthur', 19);
$anniv = new Anniversary(25, 6, 2003, $arthur);

//question 20
echo "\n question 20\n";
echo $anniv->getDescription()."\n";

//question 21
echo "\n question 21\n";
$leo = new Person('bourgasser', 'leo', 19);
$annviLeo = new Anniversary(30, 1, 2004, $leo);

//question 23
echo "\n question 23\n";
$cal = new Calendar;

//question 24
echo "\n question 24\n";
echo decodeBooleen($cal->coincides($anniv))."\n";

//question 25
echo "\n question 25\n";
echo decodeBooleen($cal->addEvent($anniv))."\n";
echo decodeBooleen($cal->addEvent($annviLeo))."\n";
echo decodeBooleen($cal->addEvent($meet))."\n";
echo decodeBooleen($cal->addEvent($meet2))."\n";
echo decodeBooleen($cal->addEvent($meet3))."\n";
echo "\n";
echo decodeBooleen($cal->coincides($meet))."\n";

//question 31
echo "\n question 31\n";
$dateDeb = new Date(1,6,2003);
$dateFin = new Date(1,7,2003);
$dateFin2 = new Date(1,7,2004);
$filtre1 = new FilterDate($dateDeb, $dateFin);
$filtre2 = new FilterDate($dateDeb, $dateFin2);

$fil1 = $cal->applyFilter($filtre1);
$fil2 = $cal->applyFilter($filtre2);


echo 'test fil1'."\n";
foreach($fil1 as $ev){
    echo $ev."\n";
}
echo 'test fil2'."\n";
foreach($fil2 as $ev){
    echo $ev."\n";
}

//question 35
echo "\n question 35\n";
$fil3 = new FilterMeeting;
$filMeet = $cal->applyFilter($fil3);
foreach($filMeet as $ev){
    echo $ev."\n";
}

//question 39
echo "\n question 39\n";
$dateFin3 = new Date(1,11,2023);
$fil4 = new FilterDate($dateDeb, $dateFin3);
$filAnd = new FilterAnd($fil3,$fil4);
$testFil4 = $cal->applyFilter($filAnd);
foreach($testFil4 as $ev){
    echo $ev."\n";
}