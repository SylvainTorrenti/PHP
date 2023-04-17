<?php ob_start(); //  ne pas modifier
$titre = "Exo 22 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="POST">
    <input type="number" name="nombre" placeholder="saisir un nombre">
    <input type="submit" value="Valider">
</form>

<!-- mettre votre code ici -->
<?php




?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>