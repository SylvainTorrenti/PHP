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
    // appel du fichier contenant la classe Arme
    require '../../tpArmes/source/classes/Arme.php';

    //creations des objet Arme
    $arme1 = new Arme("/tpArmes/source/epee/epee1.png", "épée", "Une arme tranchante");
    $arme2 = new Arme("/tpArmes/source/arc/arc1.png", "arc", "Une arme à distance");
    $arme3 = new Arme("/tpArmes/source/hache/hache1.png", "hache", "Une arme tranchante ou outil pour couper du bois");
    $arme4 = new Arme("/tpArmes/source/fleau/fleau1.png", "fleau", "Une arme contondante");
    echo "<b>Voici toutes les armes :</b><br>";
    //vu que la fonction __toString a été redefinit nous pouvons directement ecrir "echo $arme1;" car la fonction redefini est automatiquement appeler.
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