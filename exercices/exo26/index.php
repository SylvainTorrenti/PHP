<?php ob_start(); //  ne pas modifier
$titre = "Exo 26"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$Rantanplan = ["nom" => "Rantanplan", "âge" => 10, "type" => "chien"];
$Rufus = ["nom" => "Rufus", "âge" => 15, "type" => "chien"];
$Medor = ["nom" => "Medor", "âge" => 5, "type" => "chien"];
$Diablo = ["nom" => "Diablo", "âge" => 8, "type" => "chat"];
$Gribouille = ["nom" => "Gribouille", "âge" => 12, "type" => "chat"];
$Sweety = ["nom" => "Sweety", "âge" => 19, "type" => "chat"];
$animaux = [$Rantanplan, $Rufus, $Medor, $Diablo, $Gribouille, $Sweety];
?>
<form action="" method="get">
    <button name="choix" value="tous" type="submit">TOUS</button>
    <button name="choix" value="chien" type="submit">CHIENS</button>
    <button name="choix" value="chat" type="submit">CHATS</button>
    <button name="choix" value="reset" type="submit">RESET</button>
</form>

<?php
$choix = "tous";
if (isset($_GET['choix'])) {
    $choix = $_GET['choix'];
}
echo "<br>";
foreach ($animaux as $key => $animal) {
    if ($choix == "tous" || $choix == $animal['type']) {
        foreach ($animal as $clef => $valeur) {
            echo $clef . ' : ' . $valeur . '<br>';

        }
        echo "=============";
        echo "<br>";
    }
}
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";


?>