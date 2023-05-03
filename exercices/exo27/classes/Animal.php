<?php
class Animal
{
    public $nom;
    public $age;
    public $espece;

    public function __construct($nom, $age, $espece)
    {
        $this->age = $age;
        $this->nom = $nom;
        $this->espece = $espece;
    }
    public function getEspece(): string
    {
        return $this->espece;
    }
}

?>