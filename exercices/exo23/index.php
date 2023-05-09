<?php ob_start(); //  ne pas modifier
$titre = "Exo 23 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="POST">
    <input type="text" name="nb1" placeholder="nb1" required>
    <input type="text" name="nb2" placeholder="nb2" required>
    <input type="text" name="nb3" placeholder="nb3" required>
    <input type="submit" value="Valider">
</form>

<!-- mettre votre code ici -->
<?php
$note1 = '';
if (isset($_POST['nb1'])) {
    $note1 = htmlentities($_POST['nb1']);
}
$note2 = '';
if (isset($_POST['nb2'])) {
    $note2 = htmlentities($_POST['nb2']);
}
$note3 = '';
if (isset($_POST['nb3'])) {
    $note3 = htmlentities($_POST['nb3']);
}
if (isset($_POST['nb1']) && isset($_POST['nb2']) && isset($_POST['nb3'])) {
    $notes = [$note1, $note2, $note3];
    $sum = array_sum($notes);
    $average = round($sum / count($notes));
    echo "La moyenne des notes des 3 notes est de $average";
}
?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>