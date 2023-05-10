<?php
class Arme
{
    private $img;
    private $name;
    private $detail;

    public function __construct($img, $name, $detail)
    {
        $this->img = $img;
        $this->name = $name;
        $this->detail = $detail;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDetail()
    {
        return $this->detail;
    }
    public function toString()
    {
        echo "<div class =\"weaponProp\">";
        echo "<div><img src=" . $this->img . "></div>";
        echo "<div class=\"description\"><span class=\"weapon\">" . $this->name . '</span><br>';
        echo "<p>" . $this->detail . '</p><br></div>';
        echo "</div>";
    }

}

?>