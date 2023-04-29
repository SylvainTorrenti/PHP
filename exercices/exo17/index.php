<?php ob_start(); //  ne pas modifier
$titre = "Exo 17"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation des tableau de notes
 */
$NoteMarc = [5, 14, 18, 2, 14, 12];
$NoteLuc = [14, 15, 12, 14, 18, 19];
/**
 * Calcule de la sommes des notes
 */
$sum = array_sum($NoteMarc);
/**
 * calcule de la moyenne arrondi grace à la fonction round()
 */
$average = round($sum / count($NoteMarc));
echo "La moyenne des notes de Marcs est de $average";
echo "<br>";
/**
 * Calcule de la sommes des notes
 */
$sum = array_sum($NoteLuc);
/**
 * calcule de la moyenne
 */
$average = $sum / count($NoteLuc);
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