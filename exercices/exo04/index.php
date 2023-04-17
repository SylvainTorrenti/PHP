<?php ob_start(); //  ne pas modifier
$titre = "Exo 04"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$rand = rand(1, 20);
echo "<h1>Le nombre est : " . $rand . "<br></h1>";
if ($rand <= 5) {
    echo "Il est compris entre 1 et 5";
} elseif ($rand <= 10) {
    echo "Il est compris entre 6 et 10";
} elseif ($rand <= 15) {
    echo "Il est compris entre 11 et 15";
} elseif ($rand <= 20) {
    echo "Il est compris entre 16 et 20";
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