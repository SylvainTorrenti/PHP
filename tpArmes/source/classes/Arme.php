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
    //redfinition de la fonction __toString
    public function __toString()
    {
        // creation de balise image avec le chemin entré a la construction de l'objet comme source
        $str = '<div class ="weaponProp"><div><img src="' . $this->img . '"></div>';
        //utilisiation de la propriété name avec la classe correspondante en css pour stylisé
        $str .= '<div class="description"><span class="weapon">' . $this->name . '</span><br>';
        //utilisitaion de la propriété detail
        $str .= '<p>' . $this->detail . '</p><br></div></div><br>';
        return $str;
    }
}
?>