<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Filter.php";
require_once "Date.php";

class FilterDate implements Filter{
    private Date $start;
    private Date $end;
    /**
     * __construct permet de construir le filtre en passent les valeurs des attributs deb et fin dans les attribut de class
     * start et end
     *
     * @param Date $deb date de debut de filtre
     * @param Date $fin date de fin du filtre
     */
    public function __construct(Date $deb, Date $fin){
        $this->start = $deb;
        $this->end = $fin;
    }
    /**
     * accept permet de voir ci l'envent passer en parametre est compris entre les Date start et end stoquer en attribut de class
     *
     * @param Event $event event a tester
     * @return boolean True ci l'event est accepter false sinon
     */
    public function accept(Event $event): bool{
        $rep = False;
        if($event->getDate()->isAfter($this->start) && $event->getDate()->isBefore($this->end)){
            $rep = True;
        }
    return $rep;
    }
}