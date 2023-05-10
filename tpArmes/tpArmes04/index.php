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
    $chem_img_epee = "../source/epee";
    $handle = opendir($chem_img_epee);
    while ($file = readdir($handle)) {

        if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
            $listef_epee[] = $file;
        }
    }
    $random_img = rand(0, count($listef_epee) - 1);
    $epee = $chem_img_epee . "/" . $listef_epee[$random_img];

    $chem_img_arc = "../source/arc";
    $handle = opendir($chem_img_arc);
    while ($file = readdir($handle)) {

        if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
            $listef_arc[] = $file;
        }
    }
    $random_img = rand(0, count($listef_arc) - 1);
    $arc = $chem_img_arc . "/" . $listef_arc[$random_img];

    $chem_img_hache = "../source/hache";
    $handle = opendir($chem_img_hache);
    while ($file = readdir($handle)) {

        if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
            $listef_hache[] = $file;
        }
    }
    $random_img = rand(0, count($listef_hache) - 1);
    $hache = $chem_img_hache . "/" . $listef_hache[$random_img];

    $chem_img_fleau = "../source/fleau";
    $handle = opendir($chem_img_fleau);
    while ($file = readdir($handle)) {

        if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
            $listef_fleau[] = $file;
        }
    }
    $random_img = rand(0, count($listef_fleau) - 1);
    $fleau = $chem_img_fleau . "/" . $listef_fleau[$random_img];

    $arme1 = new Arme($epee, "épée", "Une arme tranchante");
    $arme2 = new Arme($arc, "arc", "Une arme à distance");
    $arme3 = new Arme($hache, "hache", "Une arme tranchante ou outil pour couper du bois");
    $arme4 = new Arme($fleau, "fleau", "Une arme contondante");
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