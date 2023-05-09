<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Session 1</title>
</head>

<body>
    <?php
    echo session_id();
    ?>
    <div><a href="index.php">Acceuil</a></div>
</body>

</html>