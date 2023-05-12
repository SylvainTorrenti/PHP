<?php ob_start(); //  ne pas modifier
$titre = "TP 02 - Tableaux associatifs"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des armes</title>
    <link rel="stylesheet" href="/tpArmes/source/css/style.css">
</head>

<body>
    <?php
    //creation de tableau associatif pour chaque arme
    /**Dans ce tableau il est indiquer: 
     * le chemin pour acceder a l'image
     * le nom de l'arme
     * la description de l'arme
     * */

    $arme1 = ["image" => "/tpArmes/source/epee/epee1.png", "nom" => "épée", "description" => "Une arme tranchante"];
    $arme2 = ["image" => "/tpArmes/source/arc/arc1.png", "nom" => "arc", "description" => "Une arme à distance"];
    $arme3 = ["image" => "/tpArmes/source/hache/hache1.png", "nom" => "hache", "description" => "Une arme tranchante ou outil pour couper du bois"];
    $arme4 = ["image" => "/tpArmes/source/fleau/fleau1.png", "nom" => "fleau", "description" => "Une arme contondante"];
    echo "<b>Voici toutes les armes :</b><br>";
    //Creation via php d'une <div> qui a la classe "weaponProp" qui permet de la styliser via le css lié
    echo "<div class =\"weaponProp\">";
    //nous afficherons chaque arme avec les clés dans la variable $propriete
    foreach ($arme1 as $propriete => $value) {
        //si la clé == "image" nous créons une balise HTML image qui contient le chemin fournit plus haut 
        if ($propriete == "image") {
            echo "<div><img src=\"/tpArmes/source/epee/epee1.png\"></div>";
            //si la clé == "nom" nous créons une balise HTML div avec la classe "description" qui permet de la styliser via le css lié
        } elseif ($propriete == "nom") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $value . '</span><br>';
        } else {
            //sinon nous créons une balise HTML paragraphe pour afficher les valuers des clé restantes
            echo "<p>" . $value . '</p><br></div>';
        }
        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!NE JAMAIS OUBLIER DE FERMER LES BALISES!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    }
    echo "</div>";
    //nous refaisons ce que nous avons fait precedement
    echo "<div class =\"weaponProp\">";
    foreach ($arme2 as $propriete => $value) {
        if ($propriete == "image") {
            echo "<img src=\"/tpArmes/source/arc/arc1.png\">";
        } elseif ($propriete == "nom") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $value . '</span><br>';
        } else {
            echo "<p>" . $value . '</p><br></div>';
        }
    }
    echo "</div>";
    echo "<div class =\"weaponProp\">";
    foreach ($arme3 as $propriete => $value) {
        if ($propriete == "image") {
            echo "<img src=\"/tpArmes/source/hache/hache1.png\">";
        } elseif ($propriete == "nom") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $value . '</span><br>';
        } else {
            echo "<p>" . $value . '</p><br></div>';
        }
    }
    echo "</div>";
    echo "<div class =\"weaponProp\">";
    foreach ($arme4 as $propriete => $value) {
        if ($propriete == "image") {
            echo "<img src=\"/tpArmes/source/fleau/fleau1.png\">";
        } elseif ($propriete == "nom") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $value . '</span><br>';
        } else {
            echo "<p>" . $value . '</p><br></div>';
        }
    }
    echo "</div>";
    ?>
</body>

</html>


<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>