<?php ob_start(); //  ne pas modifier
$titre = "Exo 11 "; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$nbChercher = 245;
$nbRand = -1;
$coup = 0;
while (!($nbChercher == $nbRand)) {
    $coup++;
    $nbRand = rand(100, 999);
    echo "Tirage $coup : $nbRand <br>";
}
echo "$nbChercher trouvé en $coup coups";

?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>