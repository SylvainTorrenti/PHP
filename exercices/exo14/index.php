<?php ob_start(); //  ne pas modifier
$titre = "Exo 14"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation d'une fonction qui calcul le PGCD
 */
function PGCD(int $a, int $b)
{
    $c = 1;
    $nb1 = $a;
    $nb2 = $b;
    $premier = false;
    while ($c != 0) {
        $c = $a % $b;
        $a = $b;
        $b = $c;
        if ($a == 1) {
            $premier = true;
            echo "Le PGCD de $nb1 et $nb2 est : $a<br>";
            echo "$nb2 est un nombre premier!";

        }

    }
    if ($premier == false) {
        echo "Le PGCD de $nb1 et $nb2 est : $a <br>";
    }


}
// creation des variables
$nb1 = 80;
$nb2 = 692;
$nb3 = 56952;
$nb4 = 3444;
$nb5 = 6593;
$nb6 = 97;
/**
 * Affichage est utilisation de la fonction utilisé plus haut
 */
echo PGCD($nb1, $nb2) . "<br>";
echo PGCD($nb3, $nb4) . "<br>";
echo PGCD($nb5, $nb6) . "<br>";
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>