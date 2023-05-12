<?php
require_once 'classes/Arme.php';
class Joueur
{
    private $name;
    private $strength;
    private $life;
    private $weapon;

    public function __construct(string $name, int $strength, int $life, Arme $weapon)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->life = $life;
        $this->weapon = $weapon;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getStrength()
    {
        return $this->strength;
    }
    public function getLife()
    {
        return $this->life;
    }
    public function getWeapon()
    {
        return $this->weapon;
    }
    public function __toString()
    {
        $string = "Nom : " . $this->name . "<br>Force : " . $this->strength . "<br>Vie : " . $this->life . "<br>Arme : " . $this->weapon . "<br>";
        return $string;
    }
}
?>