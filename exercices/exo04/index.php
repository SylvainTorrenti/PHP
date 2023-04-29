<?php ob_start(); //  ne pas modifier
$titre = "Exo 04"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation d'une variable random
$rand = rand(1, 20);
?>
<!-- affichage en HTML de la variable random -->
<h1>Le nombre est :
    <?= $rand ?>
</h1>
<?php
// creation de la condition et du message à afficher selon la condition.
// Ici le message affiche le random est compris entre tel et tel valeur
if ($rand <= 5) {
    echo "Il est compris entre 1 et 5";
} elseif ($rand <= 10) {
    echo "Il est compris entre 6 et 10";
} elseif ($rand <= 15) {
    echo "Il est compris entre 11 et 15";
} elseif ($rand <= 20) {
    echo "Il est compris entre 16 et 20";
} ?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>