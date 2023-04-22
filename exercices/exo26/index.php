<?php ob_start(); //  ne pas modifier
$titre = "Exo 26"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$Rantanplan = ["nom" => "Rantanplan", "âge" => 10, "type" => "chien"];
$Rufus = ["nom" => "Rufus", "âge" => 15, "type" => "chien"];
$Medor = ["nom" => "Medor", "âge" => 5, "type" => "chien"];
$Diablo = ["nom" => "Diablo", "âge" => 8, "type" => "chat"];
$Gribouille = ["nom" => "Gribouille", "âge" => 12, "type" => "chat"];
$Sweety = ["nom" => "Sweety", "âge" => 19, "type" => "chat"];
$animaux = [$Rantanplan, $Rufus, $Medor, $Diablo, $Gribouille, $Sweety];
var_dump($animaux);
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>