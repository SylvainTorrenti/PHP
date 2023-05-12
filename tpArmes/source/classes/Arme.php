<?php
class Arme
{
    //Declaration des propriétés
    public $img;
    public $name;
    public $detail;
    // creation d'un constructeur
    public function __construct($img, $name, $detail)
    {
        $this->img = $img;
        $this->name = $name;
        $this->detail = $detail;
    }
    public function __toString()
    {
        $str = '<div class ="weaponProp"><div><img src="' . $this->img . '"></div>';
        $str .= '<div class="description"><span class="weapon">' . $this->name . '</span><br>';
        $str .= '<p>' . $this->detail . '</p><br></div></div><br>';
        return $str;
    }
}
?>