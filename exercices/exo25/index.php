<?php ob_start(); //  ne pas modifier
$titre = "Exo 25 - Bonus"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
require("fonction.php");
$tableau1 = [2, 6, 10, 20, 9, 14];
$tableau2 = [4, 8, 2, 26, 18, 14];
?>
<h2>Tableau 1</h2>
<?php
afficherTableau($tableau1);
echo "<br>";
echo calculerMoyenne($tableau1);
echo "<br>";
echo estTableauPair($tableau1);
?>
<h2>Tableau 2</h2>
<?php
afficherTableau($tableau2);
echo "<br>";
echo calculerMoyenne($tableau2);
echo "<br>";
echo estTableauPair($tableau2);
?>
<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>