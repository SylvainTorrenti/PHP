<?php ob_start(); //  ne pas modifier
$titre = "Exo 05"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$rand1 = rand(1, 100);
$rand2 = rand(1, 100);
echo "Nombre 1 : <strong>$rand1 </strong><br>";
echo "Nombre 2 : <strong>$rand2 </strong><br>";

$absolu = abs($rand1 - $rand2);
echo "Valeur absolue de <strong>$rand1</strong> - <strong>$rand2</strong> = <strong>$absolu</strong>";
echo "<br><br>";
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