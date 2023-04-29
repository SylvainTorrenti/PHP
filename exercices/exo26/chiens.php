<?php ob_start(); //  ne pas modifier
$titre = "Exo 26"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$Rantanplan = ["nom" => "Rantanplan", "âge" => 10, "type" => "chien"];
$Rufus = ["nom" => "Rufus", "âge" => 15, "type" => "chien"];
$Medor = ["nom" => "Medor", "âge" => 5, "type" => "chien"];
$Chiens = [$Rantanplan, $Rufus, $Medor]
    ?>
<button name="TOUS" type="button"><a href="tous.php">TOUS</a></button>
<button name="CHIENS" type="button"><a href="chiens.php">CHIENS</a></button>
<button name="CHATS" type="button"><a href="chats.php">CHATS</a></button>
<button name="RESET" type="reset"><a href="index.php">RESET</a></button>
<?php
echo "<br>";
foreach ($Chiens as $key => $Chiens) {
    foreach ($Chiens as $clef => $valeur) {

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