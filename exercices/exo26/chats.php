<?php ob_start(); //  ne pas modifier
$titre = "Exo 26"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$Diablo = ["nom" => "Diablo", "âge" => 8, "type" => "chat"];
$Gribouille = ["nom" => "Gribouille", "âge" => 12, "type" => "chat"];
$Sweety = ["nom" => "Sweety", "âge" => 19, "type" => "chat"];
$Chats = [$Diablo, $Gribouille, $Sweety]
    ?>
<button name="TOUS" type="button"><a href="tous.php">TOUS</a></button>
<button name="CHIENS" type="button"><a href="chiens.php">CHIENS</a></button>
<button name="CHATS" type="button"><a href="chats.php">CHATS</a></button>
<button name="RESET" type="reset"><a href="index.php">RESET</a></button>
<?php
echo "<br>";
foreach ($Chats as $key => $Chats) {
    foreach ($Chats as $clef => $valeur) {

        echo $clef . ' : ' . $valeur . '<br>';

    }
    echo "=============";
    echo "<br>";
}

/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>