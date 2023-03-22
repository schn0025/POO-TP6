<?php
// Schneider Arthur
declare(strict_types = 1);
require_once"Date.php";

abstract class Event{
    private Date $date;
    /**
     * __constructe est le constructeur de la classe Date, il crée et affecte une nouvelle date
     * Event
     *
     * @param integer $j jour de l'event
     * @param integer $mois mois de l'event
     * @param integer $annee annee de l'event
     */
    public function __construct(int $j, int $mois, int $annee){
        $this->date = new Date($j, $mois, $annee);
    }
    /**
     * getDate permet de voir la date de l'Event
     *
     * @return Date Date de l'event
     */
    public function getDate():Date{
        return $this->date;
    }
    /**
     * getDescription permet de recuperer la d'escription d'un event.
     * dans la classe Event cette methode est abstract
     *
     * @return String description de l'event
     */
    public abstract function getDescription(): String;
    /**
     * __toString permet d'avoir un affichage a proposer pour une interprétation en string
     *
     * @return string chaine a afficher
     */
    public function __toString(){
        return '['.$this->date.' - '.$this->getDescription().']';
    }
    /**
     * coincide permet de voir ci deux evenement on lieux a la même date
     *
     * @param Event $event event à comparer
     * @return boolean True ci les deux events on lieux en même temps False sinon
     */
    public function coincide(Event $event): bool{
        $rep = false;
        if($event->getDate() == $this->date){
            $rep = True;
        }
        return $rep;
    }
}