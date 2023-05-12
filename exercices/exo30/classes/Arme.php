<?php
class Arme
{
    private static $count = 0;
    private $name;
    private $power;
    private $id;
    public function __construct($name, $power)
    {
        self::$count++;
        $this->name = $name;
        $this->power = $power;
        $this->id = self::$count;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPower()
    {
        return $this->power;
    }
    public function getId()
    {
        return $this->id;
    }
    public function __toString()
    {
        $string = $this->id . "<br>Nom : " . $this->name . "<br>Puissance : " . $this->power . "<br>============<br>";
        return $string;
    }

}


?>