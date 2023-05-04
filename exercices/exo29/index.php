<?php ob_start(); //  ne pas modifier
$titre = "Exo 29 - Attribut statique"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
require 'classes/Maison.php';
$maison1 = new Maison(1982, 4, 98);
$maison2 = new Maison(1998, 7, 150);
$maison3 = new Maison(2010, 2, 25);
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Nb chambres</th>
            <th>Surface</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $maison1->AddRow();
        $maison2->AddRow();
        $maison3->AddRow();
        ?>
    </tbody>
</table>
<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>