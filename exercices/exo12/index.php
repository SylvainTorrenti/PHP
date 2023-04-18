<?php ob_start(); //  ne pas modifier
$titre = "Exo 12 - Fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function estPair($a)
{
    if ($a % 2 == 0) {
        return true;
    }
    return false;
}
$nb1 = 5;
$nb2 = 6;
if (estPair($nb1)) {
    echo "le nombre $nb1 est pair<br>";
} else {
    echo "le nombre $nb1 est impair<br>";
}
if (estPair($nb2)) {
    echo "le nombre $nb2 est pair<br>";
} else {
    echo "le nombre $nb2 est impair<br>";
}
?>
<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>