<?php
// Schneider Arthur
declare(strict_types = 1);

class Date{
    private int $day;
    private int $month;
    private int $year;
    /**
     * __construct permet de construir un objet de type Date en affectant des valeurs passer en
     * parametre a day, month et year
     *
     * @param integer $j jour de la date
     * @param integer $m mois de la date
     * @param integer $a annee de la date
     */
    public function __construct(int $j, int $m, int $a){
        $this->day = $j;
        $this->month = $m;
        $this->year = $a;
    }
    /**
     * __toString donne un facon d'interpeter l'objet Date en tant que chaine de charactaire
     *
     * @return string chaine de charactaire a afficher
     */
    public function __toString():string{
        return $this->day .'/'. $this->month .'/'. $this->year."\n";
    }
    public function isBefore (Date $date) : bool{
        $avant = $this->year < $date->year;
        if(!$avant){
            if($this->year == $date->year){
                $avant = $this->month < $date->month;
                    if(!$avant){
                        if($this->month == $date->month){
                            $avant = $this->day < $date->day;
                        }
                    }
            }
        }
    return $avant;
    }
    public function isAfter (Date $date) : bool{
        return ! ($this == $date || $this->isBefore($date));
        }
}