<?php ob_start(); //  ne pas modifier
$titre = "Exo 18"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/**
 * Creation d'un tableau regroupant les tableaux de notes des eleves
 */
$notes = [[12, 14, 15, 13], [14, 18, 17, 16], [2, 4, 3, 6], [19, 18, 17, 16]];
/**
 * Calcul de la longeur du tableau et stockage dans une variable
 */
$length_notes = count($notes);
/**
 * Creation d'une boucle pour atteindre les elements du tableau
 */
for ($i = 0; $i < $length_notes; $i++) {
    /**
     * calcul de la somme des notes presente dans le tableau à l'indice $i
     */
    $sum = array_sum($notes[$i]);
    /**
     * calcul de la somme du tableau à l'indice $i
     * arrondi a deux decimal grace au arugment de la fonction round ", 2" signifie que nous souhaitons une precision de 2 chiffres aprés la virgule
     */
    $average = round($sum / count($notes[$i]), 2);
    echo "La moyenne des notes de l'élève <b>" . $i + 1 . "</b> est de <b>" . $average . "</b><br>";
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