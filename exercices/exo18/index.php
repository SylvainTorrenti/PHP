<?php ob_start(); //  ne pas modifier
$titre = "Exo 18"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$notes = [[12, 14, 15, 13], [14, 18, 17, 16], [2, 4, 3, 6], [19, 18, 17, 16]];
$length_notes = count($notes);
for ($i = 0; $i < $length_notes; $i++) {
    $sum = array_sum($notes[$i]);
    $average = round($sum / count($notes[$i]), 2);
    echo "La moyenne des notes de l'élève <strong>" . $i + 1 . "</strong> est de <strong>" . $average . "</strong><br>";
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