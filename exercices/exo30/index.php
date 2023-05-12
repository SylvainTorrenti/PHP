<?php ob_start(); //  ne pas modifier
$titre = "Exo 30 - Manipuler 2 classes"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
require_once 'classes/Arme.php';
require_once 'classes/Joueur.php';

$w1 = new Arme('Hache', 25);
$w2 = new Arme('Baton', 3);
$j1 = new Joueur('Sylvain', 100, 85, $w1);
$j2 = new Joueur('Henry', 25, 15, $w2);

echo $j1;
echo $j2;

?>



<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>