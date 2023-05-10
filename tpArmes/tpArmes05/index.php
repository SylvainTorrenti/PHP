<?php ob_start(); //  ne pas modifier
$titre = "TP 05 - Gestion image/level"; // Mettre le titre de la page
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
    require_once '../../tpArmes/source/classes_tp_5/Arme_tp_5.php';
    $arme1 = new Arme(4, "épée", "Une arme tranchante");
    $arme2 = new Arme(2, "arc", "Une arme à distance");
    $arme3 = new Arme(3, "hache", "Une arme tranchante ou outil pour couper du bois");
    $arme4 = new Arme(2, "fleau", "Une arme contondante");
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