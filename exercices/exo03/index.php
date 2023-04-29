<?php ob_start(); //  ne pas modifier
$titre = "Exo 03"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation des variables
$sexe = "F";
$age = 35;
// Condition pour afficher la bon resultat
// Si c'est une femme entre 21 et 41 ans alors les conditions sont remplies
if ($sexe == "F" && $age >= 21 && $age <= 41) {
    echo "Bienvenue vous remplissez les conditions";
} else {
    echo "Désolé vous ne remplissez pas les conditions";
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