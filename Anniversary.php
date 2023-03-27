<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Event.php";
require_once "Person.php";

Class Anniversary extends Event{
    private Person $concerned;
    /**
     * __constructe est le constructeur de la classe Anniversary, il crée et affecte un nouvelle 
     * Event en tant qu'anniversaire 
     *
     * @param integer $j jour de l'anniv
     * @param integer $mois mois de l'anniv
     * @param integer $annee année de l'anniv
     * @param Person $pers personne dont c'est l'anniv
     */
    public function __construct(int $j,int $mois,int $annee, Person $pers){
        parent::__construct($j, $mois, $annee);
        $this->concerned = $pers;
    }
    /**
     * getDescription permet d'avoir une description d'un annive sout la forme Anniversaire - concerné
     *
     * @return string description de l'anniv
     */
    public function getDescription(): string{
        $desc = 'Anniversaire - '.$this->concerned;
        return $desc;
    }
    /**
     * coincide comme un annive est une alert retourn toujours false
     *
     * @param Event $event evenement a comparer
     * @return boolean False
     */
    public function coincide(Event $event):bool{
        return False;
    }
}