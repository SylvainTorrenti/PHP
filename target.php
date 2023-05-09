<?php
$nom = '';
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les formulaires</title>
</head>

<body>
    <h1>Les formulaires - Target</h1>
    <a href="formulaire.php">Retour</a>
    <?php if (!empty($nom)): ?>
        <p>Bonjour <strong>
                <?= $nom ?>
            </strong></p>
    <?php else: ?>
        <p>Pas de nom</p>
    <?php endif ?>
</body>

</html>