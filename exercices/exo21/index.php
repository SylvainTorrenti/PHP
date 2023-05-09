<?php ob_start(); //  ne pas modifier
$titre = "Exo 21 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="GET">
    <input type="text" name="nom" placeholder="Votre pseudo">
    <input type="text" name="age" placeholder="votre âge">
    <input type="submit" value="Valider">

</form>
<!-- mettre votre code ici -->
<?php
$nom = '';
if (isset($_GET['nom'])) {
    $nom = htmlentities($_GET['nom']);
}
$age = '';
if (isset($_GET['age'])) {
    $age = htmlentities($_GET['age']);
}
if (isset($_GET['nom']) && isset($_GET['age'])) {

    echo "$nom à $age ans";
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