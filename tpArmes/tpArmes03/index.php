<?php ob_start(); //  ne pas modifier
$titre = "TP 03 - La POO"; // Mettre le titre de la page
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
    require '../../tpArmes/source/classes/Arme.php';


    $arme1 = new Arme("/tpArmes/source/epee/epee1.png", "épée", "Une arme tranchante");
    $arme2 = new Arme("/tpArmes/source/arc/arc1.png", "arc", "Une arme à distance");
    $arme3 = new Arme("/tpArmes/source/hache/hache1.png", "hache", "Une arme tranchante ou outil pour couper du bois");
    $arme4 = new Arme("/tpArmes/source/fleau/fleau1.png", "fleau", "Une arme contondante");
    echo "<b>Voici toutes les armes :</b><br>";
    echo "<div class =\"weaponProp\">";
    // foreach ($armes as $key => $arme) {
    foreach ($arme1 as $clef => $valeur) {
        if ($clef == 'img') {
            echo "<div><img src=" . $valeur . "></div>";
        } elseif ($clef == "name") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $valeur . '</span><br>';
        } else {
            echo "<p>" . $valeur . '</p><br></div>';
        }
    }
    echo "</div>";
    echo "<br>";
    echo "<div class =\"weaponProp\">";
    foreach ($arme2 as $clef => $valeur) {
        if ($clef == 'img') {
            echo "<div><img src=" . $valeur . "></div>";
        } elseif ($clef == "name") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $valeur . '</span><br>';
        } else {
            echo "<p>" . $valeur . '</p><br></div>';
        }
    }
    echo "</div>";
    echo "<br>";
    echo "<div class =\"weaponProp\">";
    foreach ($arme3 as $clef => $valeur) {
        if ($clef == 'img') {
            echo "<div><img src=" . $valeur . "></div>";
        } elseif ($clef == "name") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $valeur . '</span><br>';
        } else {
            echo "<p>" . $valeur . '</p><br></div>';
        }
    }
    echo "</div>";
    echo "<br>";
    echo "<div class =\"weaponProp\">";
    foreach ($arme4 as $clef => $valeur) {
        if ($clef == 'img') {
            echo "<div><img src=" . $valeur . "></div>";
        } elseif ($clef == "name") {
            echo "<div class=\"description\"><span class=\"weapon\">" . $valeur . '</span><br>';
        } else {
            echo "<p>" . $valeur . '</p><br></div>';
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