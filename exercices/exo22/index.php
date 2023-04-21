<?php ob_start(); //  ne pas modifier
$titre = "Exo 22 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="POST">
    <input type="number" name="nombre" placeholder="saisir un nombre">
    <input type="submit" value="Valider">
</form>

<!-- mettre votre code ici -->
<?php

$nombre = '';
if (isset($_POST['nombre'])) {
    $nombre = htmlentities($_POST['nombre']);
}
function estPair(int $a): bool
{
    if ($a % 2 == 0) {
        return true;
    }
    return false;
}
if (estPair($nombre)) {
    echo "le nombre $nombre est pair<br>";
} else {
    echo "le nombre $nombre est impair<br>";
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