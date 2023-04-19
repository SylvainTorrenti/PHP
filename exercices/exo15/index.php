<?php ob_start(); //  ne pas modifier
$titre = "Exo 15"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function Consonne($str)
{
    $voyelle = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
    $str = str_replace($voyelle, "", $str);
    return $str;
}
$str = "bordure";
echo " Le mot <strong>\"$str\"</strong> sans voyelle est " . Consonne($str);



?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>