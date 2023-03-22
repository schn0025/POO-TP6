<?php
// Schneider Arthur
declare(strict_types = 1);

final class Person
{
    private string $lastName;
    private string $firstName;
    private int $age;
    /**
     * __construct consuit l'objet Person en deffinisent le nom, prenom et l'age de la personne
     * ci il n'y a pas de nom celui ci serat definit a Doe, ci le prenom n'est pas deffinit
     * celui ci serat deffinit a John et l'age seras deffinit a 0
     *
     * @param string $lastName nom de la personne
     * @param string $firstName prenom de la personne
     * @param integer $age age de la personne
     */
    public function __construct(string $lastName = "Doe", string $firstName = "John", int $age = 0)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }
    /**
     * getLastName permet de savoir le nom de la personne
     *
     * @return string nom de la personne
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * getFirstName permet de savoir le prenom de la personne
     *
     * @return string prenom de la
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * getAge permet de savoir l'age de la personne
     *
     * @return integer age de la personne
     */
    public function getAge() : int
    {
        return $this->age;
    }
    /**
     * __toString donne un facon d'interpeter l'objet personne en tant que chaine de charactaire
     *
     * @return string chaine de charactaire a afficher
     */
    public function __toString() : string
    {
        return $this->firstName. ' ' .$this->lastName.' (' .$this->age.')';
    }
}
