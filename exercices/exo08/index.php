<?php ob_start(); //  ne pas modifier
$titre = "Exo 8"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$rand = rand(5, 15);
$j = 1;
$result = 0;
?>

<strong>Voici le cumul des
    <?= $rand ?> premier nombres (sens inverse)<br>
</strong>
<?php
for ($i = $rand; $i >= 1; $i--) {
    $result += $i;
    echo "Etape $j - résultat =  $result <br>";
    $j++;
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