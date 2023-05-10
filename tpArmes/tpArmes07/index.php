<?php
session_start();

if (!isset($_SESSION["epee"]))
    $_SESSION["epee"] = 1;
if (!isset($_SESSION["arc"]))
    $_SESSION["arc"] = 1;
if (!isset($_SESSION["hache"]))
    $_SESSION["hache"] = 1;
if (!isset($_SESSION["fleau"]))
    $_SESSION["fleau"] = 1;

ob_start(); //  ne pas modifier
$titre = "TP 07 - La session"; // Mettre le titre de la page
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
    require_once '../../tpArmes/source/classes_tp_7/Arme_tp_7.php';
    $arme1 = new Arme(5, "épée", "Une arme tranchante");
    $arme2 = new Arme(2, "arc", "Une arme à distance");
    $arme3 = new Arme(5, "hache", "Une arme tranchante ou outil pour couper du bois");
    $arme4 = new Arme(5, "fleau", "Une arme contondante");
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