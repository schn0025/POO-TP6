<?php
// Schneider Arthur
declare(strict_types = 1);

interface Filter{
    /**
     * accept permet de voir ci l'envent passer en parametre est accepter par le filtre
     *
     * @param Event $event event a tester
     * @return boolean True ci l'event est acceter False sinon
     */
    public function accept(Event $event):bool;
}