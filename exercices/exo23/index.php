<?php ob_start(); //  ne pas modifier
$titre = "Exo 23 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="POST">
    <input type="text" name="nb1" placeholder="nb1" required>
    <input type="text" name="nb2" placeholder="nb2" required>
    <input type="text" name="nb3" placeholder="nb3" required>
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