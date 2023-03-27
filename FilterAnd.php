<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Filter.php";
require_once "Date.php";

class FilterAnd implements Filter{
    private Filter $filter1;
    private Filter $filter2;
    /**
     * __construct permet de passer les filtre fil1 et fil2 dans les attribut de classe
     * filter1 et filter2
     *
     * @param Filter $fil1 filtre1
     * @param Filter $fil2 filytre2
     */
    public function __construct(Filter $fil1, Filter $fil2){
        $this->filter1 = $fil1;
        $this->filter2 = $fil2;
    }
    /**
     * accept permet de voir cs l'envent passer est accepter par le filtre1 et le filtre2
     * stoquer en attribut de class
     *
     * @param Event $event event a tester 
     * @return boolean True si l'event est accepter false sinon
     */
    public function accept(Event $event):bool{
        return ($this->filter1->accept($event) && $this->filter2->accept($event));
    }

}