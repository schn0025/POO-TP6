<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Event.php";
require_once "Person.php";

class Calendar {
    private array $content = array();
    /**
     * coincides permet de parcourir tout la liste d'event du calendar pour voir ci l'envent
     * passer en parametre corespond avec un déjà inscrit.
     *
     * @param Event $envent event a chercher dans le calendar
     * @return boolean True si l'event en parametre corespond a un autre déjat inscrit
     */
    public function coincides(Event $event):bool{
        $rep = False;
        foreach($this->content as $ev ){
            if($ev->coincide($event)){
                $rep = True;
            }
        }
        return $rep;
    }
    
    /**
     * addEvent permet d'ajouter un evenement dans le calendar ci l'event ne coincide pas evec
     * un autre envent dans calendart
     *
     * @param Envent $envent envent a ajouter
     * @return bool True ci l'event a ete ajouter False sinon. 
     */
    public function addEvent(Event $event): bool{
        $rep = False;
        if(!$this->coincides($event)){
            $this->content[count($this->content)] = $event;
            $rep = True;
        }
        return $rep;
    }

    /**
     * applyFilter permet d'apliquer un filtre passer en parametre
     *
     * @param Filter $filtre filtre a appliquer
     * @return array envent qui sont accepter par le filtre
     */
    public function applyFilter(Filter $filtre):array{
        $rep = array();
        $i = 0;
        foreach($this->content as $event){
            if($filtre->accept($event)){
                $rep[$i] = $event;
                $i++;
            }
        }
        return $rep;
    }
}