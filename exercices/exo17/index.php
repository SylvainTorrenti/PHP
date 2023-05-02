<?php ob_start(); //  ne pas modifier
$titre = "Exo 17"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation des tableau de notes
 */
$NotesMarc = [5, 14, 18, 2, 14, 12];
$NotesLuc = [14, 15, 12, 14, 18, 19];
/**
 * Calcule de la sommes des notes
 */
$sum = 0;
for ($i = 0; $i < count($NotesMarc); $i++) {
    $sum += $NotesMarc[$i];
}
/**
 * calcule de la moyenne arrondi grace à la fonction round()
 */
$average = round($sum / count($NotesMarc));
echo "La moyenne des notes de Marcs est de $average";
echo "<br>";
/**
 * Calcule de la sommes des notes
 */
$sum = array_sum($NotesLuc);
/**
 * calcule de la moyenne
 */
$average = $sum / count($NotesLuc);
echo "La moyenne des notes de Luc est de $average";
?>
<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>