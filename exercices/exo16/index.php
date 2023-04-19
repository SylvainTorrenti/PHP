<?php ob_start(); //  ne pas modifier
$titre = "Exo 16"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$femme = ["Mathilde", "Lucie", "Veronique"];
$homme = ["Marc", "Luc", "Clément", "Vincent"];

$length_femme = count($femme);
$length_homme = count($homme);
for ($i = 0; $i < $length_homme; $i++) {
    echo "$i : $homme[$i] <br>";
}
echo "<br>";
echo "********************* <br>";
echo "<br>";
for ($i = 0; $i < $length_femme; $i++) {
    echo "$i : $femme[$i] <br>";
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