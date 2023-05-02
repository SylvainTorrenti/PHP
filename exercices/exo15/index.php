<?php ob_start(); //  ne pas modifier
$titre = "Exo 15"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation d'une fonction de remplacement
 */
function consonne(string $str)
{
    /**
     *creation d'une variable contenant les char à remplacé
     */
    $voyelle = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
    /**
     * creation d'une variable contenant la nouvelle chaine de charactére
     * Utilisation de la fonction str_replace.
     * str_replace =>  mettre "," entre les arguments
     * le premier argument correspond a ce qui doit être remplacé
     * le deuxiéme argument correspond ce qui remplace
     */
    $str = str_replace($voyelle, "", $str);
    return $str;
}
$str = "bordure";
echo " Le mot <strong>\"$str\"</strong> sans voyelle est " . consonne($str);



?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>