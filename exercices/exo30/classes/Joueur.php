<?php
class Joueur
{
    private $name;
    private $strength;
    private $life;
    private $weapon;

    public function __construct($name, $strength, $life, $weapon)
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
    public function display()
    {
        echo "Nom : " . $this->getName() . "<br>Force : " . $this->getStrength() . "<br>Vie : " . $this->getLife() . "<br>Arme : " . $this->getWeapon() . "<br>";
    }
}
?>