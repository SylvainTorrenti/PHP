<?php ob_start(); //  ne pas modifier
$titre = "Exo 07 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
// creation d'une variable random
$rand = rand(5, 15);
// creation d'une boucle permettant d'afficher la table de multiplication de le variable créé
// "$i = 1" la valeur a laquelle nous commençons
// "$i <= 10" executer la boucle jusqu'à que cette valeur soit <= 10
// "$i++" incrementer la variable a chaque tour de boucle
for ($i = 1; $i <= 10; $i++) {
    // // creation d'une variable a chauqe boucle qui stocke le resultat de $i et de $rand
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