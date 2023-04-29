<?php ob_start(); //  ne pas modifier
$titre = "Exo 10"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation des variables
$i = 0;
/**
 * Creation du'une boucle do.. while(). Cela signifie que le code est executer au moins une fois avant de verifier la condition. Si celle ci est fausse la boucle recommence.
 * ici la condition est vrai quand le premier chiffre est pair ET les deux suivant impaire
 */
do {
    $rand1 = rand(1, 1000);
    $rand2 = rand(1, 1000);
    $rand3 = rand(1, 1000);
    echo "$rand1, $rand2, $rand3 <br>";
    $i++;
} while (!(($rand1 % 2 == 0) && ($rand2 % 2 != 0) && ($rand3 % 2 != 0)));
echo "Resultat obtenu en $i coups";

?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>