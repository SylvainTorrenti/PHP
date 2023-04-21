<?php ob_start(); //  ne pas modifier
$titre = "Exo 20"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$personnes = [
    [
        "nom" => "Clément",
        "age" => 25,
        "sexe" => true,
        "notes" => [12, 15, 11, 9, 18],
    ],
    [
        "nom" => "Mathilde",
        "age" => 19,
        "sexe" => false,
        "notes" => [14, 18, 17, 16],
    ],
    [
        "nom" => "Oscar",
        "age" => 15,
        "sexe" => true,
        "notes" => [2, 4, 3, 6],
    ]
];
foreach ($personnes as $key => $personne) {
    foreach ($personne as $clef => $valeur) {
        if ($clef != "sexe" && $clef != "notes") {

            echo $clef . ' : ' . $valeur . '<br>';
        } else if ($clef == "sexe") {
            echo $clef . (($clef == "sexe" && $valeur == true) ? ' : homme <br>' : ' : femme <br>');

        } else if ($clef == "notes") {
            $length_valeur = count($valeur);
            $nbNote = 1;
            for ($i = 0; $i < $length_valeur; $i++) {
                $sum = array_sum($valeur);
                echo "Note " . $nbNote . " : " . $valeur[$i] . "<br>";
                $nbNote++;
                $average = round($sum / $length_valeur);
            }
            echo "La moyenne est de $average <br>";
            echo "===========<br>";
        }

    }
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