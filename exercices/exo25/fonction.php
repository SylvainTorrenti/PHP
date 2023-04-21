<!-- mettre votre code ici -->
<?php
function afficherTableau(array $a)
{
    $lengthTab = count($a);
    for ($i = 0; $i < $lengthTab; $i++) {
        echo "$a[$i] ";
    }
}
function calculerMoyenne(array $a)
{
    $sum = array_sum($a);
    $average = $sum / count($a);
    return "La moyenne est de : $average";
}
function estTableauPair(array $a)
{
    $lengthTab = count($a);
    for ($i = 0; $i < $lengthTab; $i++)
        if ($a[$i] % 2 != 0) {
            return "Le tableau ne contient pas que des valeurs paires";
        }
    return "Le tableau contient que des valeurs paires";

}
?>