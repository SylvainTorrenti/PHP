<?php ob_start(); //  ne pas modifier
$titre = "Exo 13"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation d'une fonction qui calcule la factorielle
 */
function factorielle(int $a)
{
    $Somme = 1;
    while ($a > 0) {
        $Somme = $a * $Somme;
        $a = $a - 1;
    }
    return $Somme;
}
// creation des variables
$nb1 = 4;
$nb2 = 10;
/**
 * Affichage est utilisation de la fonction créé plus haut
 */
echo "La foctorielle de $nb1 est : " . factorielle($nb1) . "<br>";
echo "La foctorielle de $nb2 est : " . factorielle($nb2) . "<br>";
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>