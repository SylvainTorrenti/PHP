<?php ob_start(); //  ne pas modifier
$titre = "Exo 30 - Manipuler 2 classes"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
require 'classes/Arme.php';
require 'classes/Joueur.php';

$j1 = new Joueur('Sylvain', 100, 85, 1);
$w1 = new Arme('Hache', 25);
$j2 = new Joueur('Henry', 25, 15, 2);
$w2 = new Arme('Baton', 3);
$j1->display();
$w1->display();
$j2->display();
$w2->display();
?>



<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>