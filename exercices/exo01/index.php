<?php ob_start(); //  ne pas modifier
$titre = "Exo 01"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation des variables
$a = 3;
$b = 5;
$c = 7;
// affichage des variables
echo "********** Avant permutation ********** <br>";
echo "A : $a";
echo "<br>";
echo "B : $b";
echo "<br>";
echo "C : $c";
echo "<br>";
echo "********** Aprés permutation ********** <br>";
// creation d'une variable temporaire pour permettre la permutation
$tmp = $a;
$a = $b;
$b = $c;
$c = $tmp;
echo "A : $a";
echo "<br>";
echo "B : $b";
echo "<br>";
echo "C : $c";
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>