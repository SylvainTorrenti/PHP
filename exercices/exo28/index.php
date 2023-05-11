<?php ob_start(); //  ne pas modifier
$titre = "Exo 28 - Private et Getters"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
require 'classes/Voiture.php';
$astra = new Voiture('Astra', 'Opel', 'Rouge', 2017);
$twingo = new Voiture('Twingo', 'Renault', 'Vert', 2019);
$P308 = new voiture('308', 'Peugeot', 'Bleu', 2020);
$tigra = new Voiture('Tigra', 'Opel', 'Noir', 2021);
$megan = new Voiture('Megane', 'Renault', 'Rouge', 2019);
$voitures = [$astra, $twingo, $P308, $tigra, $megan];
?>
<form action="" method="post">
    <div><label for="brand">Marque</label>
        <!-- creation d'une liste déroulante pour les réponses -->
        <select name="brand" id="brand">
            <option value="tous">--Choisir une Marque--</option>
            <option value="Opel">Opel</option>
            <option value="Renault">Renault</option>
            <option value="Peugeot">Peugeot</option>
        </select>
        <div><label for="year">Année</label>
            <!-- creation d'une liste déroulante pour les réponses -->
            <select name="year" id="year">
                <option value="tous">--Choisir une Année--</option>
                <option value="2017">2017</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2019">2019</option>
            </select>
        </div>
        <button type="submit">Valider</button>
        <button type="reset">Reset</button>
</form>
<?php
$marque = "tous";
if (isset($_POST['brand'])) {
    $marque = $_POST['brand'];
}
$year = "tous";
if (isset($_POST['year'])) {
    $year = $_POST['year'];
}
echo "<br>";
foreach ($voitures as $key => $voiture) {
    if (($marque == "tous" && $year == "tous") || ($marque == "tous" && $year == $voiture->getYear()) || ($year == "tous" && $marque == $voiture->getBrand()) || ($marque == $voiture->getBrand() && $year == $voiture->getYear())) {
        echo $voiture;

    }
}




/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>