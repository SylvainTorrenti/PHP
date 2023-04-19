<?php ob_start(); //  ne pas modifier
$titre = "Exo 17"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$NoteMarc = [5, 14, 18, 2, 14, 12];
$NoteLuc = [14, 15, 12, 14, 18, 19];

$sum = array_sum($NoteMarc);
$average = round($sum / count($NoteMarc));
echo "La moyenne des notes de Marcs est de $average";
echo "<br>";
$sum = array_sum($NoteLuc);
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