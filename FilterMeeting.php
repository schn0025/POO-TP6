<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "Filter.php";
require_once "Date.php";

class FilterMeeting implements Filter{
    /**
     * accept permet de voir ci l'envent passer est de type Meeting
     *
     * @param Event $event event a tester 
     * @return boolean True si l'event est accepter false sinon 
     */
    public function accept(Event $event): bool{
        return (get_class($event) == 'Meeting');
    }
}