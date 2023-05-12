<?php ob_start(); //  ne pas modifier
$titre = "TP 04 - Améliorations POO"; // Mettre le titre de la page
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des armes</title>
    <link rel="stylesheet" href="/tpArmes/source/css/style.css">
</head>

<body>
    <!-- mettre votre code ici -->
    <?php
    require '../../tpArmes/source/classes_tp_4/Arme_tp_4.php';

    $arme1 = new Arme("épée", "Une arme tranchante");
    $arme2 = new Arme("arc", "Une arme à distance");
    $arme3 = new Arme("hache", "Une arme tranchante ou outil pour couper du bois");
    $arme4 = new Arme("fleau", "Une arme contondante");
    echo "<b>Voici toutes les armes :</b><br>";
    echo $arme1;
    echo $arme2;
    echo $arme3;
    echo $arme4;
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