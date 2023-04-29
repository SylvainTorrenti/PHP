<?php ob_start(); //  ne pas modifier
$titre = "Exo 12"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation d'une fonction qui definit si le nombre passer en paramétre est pair
 * l'argument est typé pour "forcer" la fonction à fonctionner que si un int est passé en argument
 */
function estPair(int $a): bool
{
    if ($a % 2 == 0) {
        return true;
    }
    return false;
}
// creation des variables
$nb1 = 5;
$nb2 = 6;
/**
 * Creation de condition if avec la fonction créé plus haut
 */
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