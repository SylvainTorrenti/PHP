<?php ob_start(); //  ne pas modifier
$titre = "TP 01 - Les variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
//Creation des variables
$arme1 = "épée";
$arme2 = "arc";
$arme3 = "hache";
$arme4 = "fléau";
$arme5 = "lance";
//creation d'un tableau contenant les variables
$armes = [$arme1, $arme2, $arme3, $arme4, $arme5];
?>
<p><b>Voici toutes les armes</b></p>
<?php
//Parcour du tableau en utilisant les indices comme clé
foreach ($armes as $key => $value) {
    echo 'Arme ' . $key + 1 . ' : ' . $value;
    echo "<br>";

}
?>
<!-- creation du formulaire qui affichera les données -->
<form action="">
    <select name="weapon" id="weapon">
        <option value="">Choisir une arme</option>
        <?php
        // creation des differentes options en fonction des armes contenu dans la tableau.
        // Si on ajoute des armes dans la tableau elles seront automatiquements ajouter dans les "options"
        foreach ($armes as $value) {
            echo '<option value="' . $value . '">' . $value . '</option>';
        }
        ?>
    </select>
    <button type="submit">Valider</button>
</form>

<?php

/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>