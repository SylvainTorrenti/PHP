<?php

class Maison
{
    private static $count = 0;
    private $id;
    private $yearCons;
    private $roomNb;
    private $surface;
    public function __construct($yearCons, $roomNb, $surface)
    {
        self::$count++;
        $this->yearCons = $yearCons;
        $this->roomNb = $roomNb;
        $this->surface = $surface;
        $this->id = self::$count;

    }
    public function getId()
    {
        return $this->id;
    }
    public function getYearCons()
    {
        return $this->yearCons;
    }
    public function getRoomNb()
    {
        return $this->roomNb;
    }
    public function getSurface()
    {
        return $this->surface;
    }
    public function AddRow($a)
    {
        echo "<tr><td>" . $a->getId() . "</td><td>" . $a->getYearCons() . "</td><td>" . $a->getRoomNb() . "</td><td>" . $a->getSurface() . "</td></tr>";

    }
}





?>