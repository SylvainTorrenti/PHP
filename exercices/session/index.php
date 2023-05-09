<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>

<body>
    <?php
    echo session_id();
    ?>
    <div><a href="session1.php">session1</a></div>
    <div><a href="session2.php">session2</a></div>
</body>

</html>