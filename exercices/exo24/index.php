<?php ob_start(); //  ne pas modifier
$titre = "Exo 24 - Bonus"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
function multiplication(int $nb)
{
    $i = 1;
    while ($i <= 10) {
        $produit = $nb * $i;
        echo "<td>$produit</td>";
        $i = $i + 1;
    }
}
echo "<table>";
$a = 1;
while ($a <= 10) {
    echo "<tr>" . multiplication($a) . "</tr>";
    $a++;
}
echo "</table>";
?>
<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>