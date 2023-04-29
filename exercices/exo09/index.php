<?php ob_start(); //  ne pas modifier
$titre = "Exo 09"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation des variables
$rand = rand(1, 20);
$i = 1;
/** creation d'une boucle while
 * tant que le random est <15 il en retire un sinon il l'affiche
 */
while ($rand < 15) {
    echo "Essai $i : $rand est trop petit (<15)<br>";
    $rand = rand(1, 20);
    $i++;
}
echo "Le chiffre est $rand";
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>