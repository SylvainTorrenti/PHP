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
        $this->id = self::$count;
        $this->yearCons = $yearCons;
        $this->roomNb = $roomNb;
        $this->surface = $surface;

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
        echo "<tr><td>" . $this->id . "</td><td>" . $this->yearCons . "</td><td>" . $this->roomNb . "</td><td>" . $this->surface . "</td></tr>";

    }
}





?>