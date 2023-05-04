<?php ob_start(); //  ne pas modifier
$titre = "TP 01 - Les variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$arme1 = "arme 1 : épée";
$arme2 = "arme 2 : arc";
$arme3 = "arme 3 : hache";
$arme4 = "arme 4 : fléau";
?>
<p><b>Voici toutes les armes</b></p>
<?php
echo $arme1 . "<br>";
echo $arme2 . "<br>";
echo $arme3 . "<br>";
echo $arme4 . "<br>";
?>

<form action="">
    <select name="weapon" id="weapon">
        <option value="">Choisir une arme</option>
        <option value="epee">
            épée
        </option>
        <option value="arc">
            arc
        </option>
        <option value="hache">
            hache
        </option>
        <option value="fleau">
            fléau
        </option>
    </select>
</form>


<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>