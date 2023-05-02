<?php ob_start(); //  ne pas modifier
$titre = "Exo 16"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation des tableau femme et homme
 */
$femmes = array("Mathilde", "Lucie", "Veronique");
$hommes = ["Marc", "Luc", "Clément", "Vincent"];
/**
 * Compte la longueur de chaque tableau et stock la valeur dans une variable
 */
$length_femme = count($femmes);
$length_homme = count($hommes);
/**
 * Creation de boucles pour afficher le contenu des tableau 
 */
for ($i = 0; $i < $length_homme; $i++) {
    echo "$i : $hommes[$i] <br>";
}
echo "<br>";
echo "********************* <br>";
echo "<br>";
$i = 0;
foreach ($femmes as $femme) {
    echo "$i : $femme <br>";
    $i++;
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