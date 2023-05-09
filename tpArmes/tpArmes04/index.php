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
    require '../../tpArmes/source/classes_tp_4/Arme.php';


    $arme1 = new Arme("/tpArmes/source/epee/epee1.png", "épée", "Une arme tranchante");
    $arme2 = new Arme("/tpArmes/source/arc/arc1.png", "arc", "Une arme à distance");
    $arme3 = new Arme("/tpArmes/source/hache/hache1.png", "hache", "Une arme tranchante ou outil pour couper du bois");
    $arme4 = new Arme("/tpArmes/source/fleau/fleau1.png", "fleau", "Une arme contondante");
    echo "<b>Voici toutes les armes :</b><br>";
    $arme1->toString();
    $arme2->toString();
    $arme3->toString();
    $arme4->toString();
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