<?php ob_start(); //  ne pas modifier
$titre = "Exo 11 "; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation des variables
$nbChercher = 245;
// on intialise $nbRand à -1 pour permettre le bon affichage du nombre de tirage
$nbRand = -1;
$coup = 0;
/**
 * Creation d'une boucle while 
 * ici la condition est que le Random doit être egale au NbChercher
 */
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