<?php ob_start(); //  ne pas modifier
$titre = "Exo 27 - Les objets"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
require 'classes/Animal.php';
$Rantanplan = new Animal('Rantanplan', 10, 'chien');
$Rufus = new Animal('Rufus', 15, 'chien');
$Medor = new Animal('Medor', 5, 'chien');
$Diablo = new Animal('Diablo', 8, 'chat');
$Gribouille = new Animal('Gribouille', 12, 'chat');
$Sweety = new Animal('sweety', 19, 'chat');
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
    if ($choix == "tous" || $choix == $animal->getEspece()) {
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