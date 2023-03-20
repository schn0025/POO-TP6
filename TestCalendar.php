<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Person.php";
require_once "Date.php";

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
echo $date;
echo $date2;

//question 6
echo "\n question 6\n";
echo decodeBooleen($date->isAfter($date2)),"\n";
echo decodeBooleen($date->isBefore($date2)),"\n";
echo decodeBooleen($date2->isAfter($date)),"\n";
echo decodeBooleen($date2->isBefore($date)),"\n";