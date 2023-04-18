<?php ob_start(); //  ne pas modifier
$titre = "Exo 07 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$rand = rand(5, 15);
for ($i = 1; $i <= 10; $i++) {
    $res = $rand * $i;
    echo "$rand * $i = $res <br>";
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