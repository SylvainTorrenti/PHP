<?php ob_start(); //  ne pas modifier
$titre = "Exo 19"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$personnes = ["p1" => ["nom" => "Clément", "age" => 25, "sexe" => true], "p2" => ["nom" => "Mathilde", "age" => 19, "sexe" => false]];
foreach ($personnes as $key => $personne) {

    foreach ($personne as $clef => $valeur) {
        if ($personne["sexe"] == true) {
            echo $clef . " : " . $valeur . "<br>";
        } else {
            echo $clef . " : " . $valeur . "<br>";
        }

    }
    echo "=============";
    echo "<br>";
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