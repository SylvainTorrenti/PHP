<?php
class Arme
{
    private $maxLvl;
    private $name;
    private $detail;

    public function __construct($maxLvl, $name, $detail)
    {
        $this->maxLvl = $maxLvl;
        $this->name = $name;
        $this->detail = $detail;
    }
    public function getmaxLvl()
    {
        return $this->maxLvl;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDetail()
    {
        return $this->detail;
    }
    public function calculMaxLvl()
    {
        $i = 1;
        echo '<div><form action="">';
        echo '<select name="weapon" id="weapon">';
        echo '<option value="">Choisir un niveau</option>';
        while ($i <= $this->getmaxLvl()) {
            echo '<option value=' . $i . '>' . $i . '</option>';
            $i++;
        }
        echo '</select></form></div>';
    }
    public function image()
    {
        $i = 1;
        if ($this->getName() == "épée") {
            $nom = $this->getName();
            $newnom = str_replace("é", "e", $nom);
            $chem = "../source/" . $newnom;
            if ($this->maxLvl == $i) {
                $epee = $chem . "/" . $i;
                return $epee;

                // } else {

                //     $chem = "../source/" . $this->getName();
                //     $handle = opendir($chem);
                //     while ($file = readdir($handle)) {

                //         if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
                //             $listef[] = $file;
                //         }
                //     }
                //     if ($this->lvl == 1) {
                //         $epee = $chem . "/" . $listef[0];
                //         return $epee;
                //     } elseif ($this->lvl == 2) {
                //         $epee = $chem . "/" . $listef[1];
                //         return $epee;
                //     } elseif ($this->lvl == 3) {
                //         $epee = $chem . "/" . $listef[2];
                //         return $epee;
                //     } elseif ($this->lvl == 4) {
                //         $epee = $chem . "/" . $listef[3];
                //         return $epee;
            }
        }
    }
    public function toString()
    {
        echo '<div class="weaponProp">';
        echo $this->calculMaxLvl();
        echo "<div><img src=" . $this->image() . "></div>";
        echo '<div class="description"><span class="weapon">' . $this->name . '</span><br>';
        echo '<p>' . $this->detail . '</p><br></div>';
        echo '</div>';
    }

}

?>