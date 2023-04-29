<?php ob_start(); //  ne pas modifier
$titre = "Exo 05"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation des variables random
$rand1 = rand(1, 100);
$rand2 = rand(1, 100);
// creation des variables avec leur valeurs en  gras
echo "Nombre 1 : <strong>$rand1 </strong><br>";
echo "Nombre 2 : <strong>$rand2 </strong><br>";
// Calcul et stockage de la valeur absolu des deux variable
$absolu = abs($rand1 - $rand2);
// affichage des variables 
echo "Valeur absolue de <strong>$rand1</strong> - <strong>$rand2</strong> = <strong>$absolu</strong>";
echo "<br><br>";
// Creation d'une condition qui affiche si la valeur absolu est comprise entre 25 et 75
if ($absolu >= 25 && $absolu <= 75) {
    echo "La valeur absolue de (<strong>$rand1</strong> - <strong>$rand2</strong>) est comprise entre 25 et 75";
} else {
    echo "La valeur absolue de (<strong>$rand1</strong> - <strong>$rand2</strong>) n'est pas comprise entre 25 et 75";
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