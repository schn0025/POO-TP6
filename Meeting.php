<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Date.php";
require_once "Event.php";
require_once "Person.php";

class Meeting extends Event{
    private Person $coordinator;
    private string $place;
    private bool $morning;
    /**
     * __constructeur de la class Meeting qui appel le constructeur de son parent
     * Event. il definit le jour, le mois et l'annee du Meeting. il deffinit aussi
     * le coordinateur, le lieux et ci le meeting a lieux le matin ou non.
     *
     * @param integer $j jour du meeting
     * @param integer $mois mois du meeting
     * @param integer $annee annee du meeting
     * @param Person $coord coordinateur du meeting
     * @param string $place lieux du meeting
     * @param boolean $morning True si le meeting a lieu le mation false sinon
     */
    public function __construct(int $j,int $mois ,int $annee, Person $coord, string $place, bool $morning ){
        parent::__construct($j, $mois, $annee);
        $this->coordinator = $coord;
        $this->place = $place;
        $this->morning = $morning;
    }
    /**
     * getMorning permet de savoir ci le meeting a lieux le matin ou non.
     *
     * @return boolean True ci le meeting a ieux le mation false sinon
     */
    public function getMorning():bool{
        return $this->morning;
    }
    /**
     * getDescription permet d'avoir la descrition d'un Meeting sout le format
     * lieu - Matin/Après-midi(selon le cas) - coordinateur
     *
     * @return string description du meeting
     */
    public function getDescription():string{
        $desc =$this->place.' - ';
        if($this->getMorning()){
            $desc .= 'Matin';
        }
        else{
            $desc .= 'Après-midi';
        }
        return $desc . ' - '.$this->coordinator;
    }
    public function coincide(Event $meet): bool{
        $rep = False;
        if(get_class($meet) == 'Meeting'){
            if(parent::coincide($meet) && $meet->morning == $this->morning){
                $rep = True;
            }
        }
        return $rep;
    }
}