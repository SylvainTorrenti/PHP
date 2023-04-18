<?php ob_start(); //  ne pas modifier
$titre = "Exo 10"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$i = 0;
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