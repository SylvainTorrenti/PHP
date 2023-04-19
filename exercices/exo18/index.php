<?php ob_start(); //  ne pas modifier
$titre = "Exo 18"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// $notes = [["élève" => 1, "note" => [12, 15, 14, 16]], ["élève" => 2, "note" => [5, 12, 10, 11]], ["élève" => 3, "note" => [1, 4, 6, 2]], ["élève" => 4, "note" => [19, 18, 18, 13]]];

// foreach ($notes as $clef => $valeur) {
//     foreach ($valeur as $key => $value) {
//         echo $value . '<br>';
//         var_dump($value);
//     }
// }
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