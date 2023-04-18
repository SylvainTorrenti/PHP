<?php ob_start(); //  ne pas modifier
$titre = "Exo 06"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$nom = "Marie";
$age = 30;
$homme = false;
$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;
echo ($age == 30 && $nom == "Marie") ? "Marie a 30 ans et c'est une femme<br>" : "Mauvaise données!<br>";
echo ($age2 == 32 && $nom2 == "Pierre") ? "Pierre a 32 ans et c'est un homme" : "Mauvaise données!";
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>