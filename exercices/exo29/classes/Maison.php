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
    public function AddRow()
    {
        echo "<tr><td>" . $this->getId() . "</td><td>" . $this->getYearCons() . "</td><td>" . $this->getRoomNb() . "</td><td>" . $this->getSurface() . "</td></tr>";

    }
}





?>