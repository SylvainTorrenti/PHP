<?php
class Arme
{
    private $lvl;
    private $name;
    private $detail;

    public function __construct($lvl, $name, $detail)
    {
        $this->lvl = $lvl;
        $this->name = $name;
        $this->detail = $detail;
    }
    public function getlvl()
    {
        return $this->lvl;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDetail()
    {
        return $this->detail;
    }
    public function image()
    {
        if ($this->getName() == "épée") {
            $nom = $this->getName();
            $newnom = str_replace("é", "e", $nom);
            $chem = "../source/" . $newnom;
            $handle = opendir($chem);
            while ($file = readdir($handle)) {

                if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
                    $listef[] = $file;
                }
            }
            if ($this->lvl == 1) {
                $epee = $chem . "/" . $listef[0];
                return $epee;
            } elseif ($this->lvl == 2) {
                $epee = $chem . "/" . $listef[1];
                return $epee;
            } elseif ($this->lvl == 3) {
                $epee = $chem . "/" . $listef[2];
                return $epee;
            } elseif ($this->lvl == 4) {
                $epee = $chem . "/" . $listef[3];
                return $epee;
            }
        } else {

            $chem = "../source/" . $this->getName();
            $handle = opendir($chem);
            while ($file = readdir($handle)) {

                if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
                    $listef[] = $file;
                }
            }
            if ($this->lvl == 1) {
                $epee = $chem . "/" . $listef[0];
                return $epee;
            } elseif ($this->lvl == 2) {
                $epee = $chem . "/" . $listef[1];
                return $epee;
            } elseif ($this->lvl == 3) {
                $epee = $chem . "/" . $listef[2];
                return $epee;
            } elseif ($this->lvl == 4) {
                $epee = $chem . "/" . $listef[3];
                return $epee;
            }
        }
    }

    public function toString()
    {
        echo "<div class =\"weaponProp\">";
        echo "<div><img src=" . $this->image() . "></div>";
        echo "<div class=\"description\"><span class=\"weapon\">" . $this->name . '</span><br>';
        echo "<p>" . $this->detail . '</p><br></div>';
        echo "</div>";
    }

}

?>