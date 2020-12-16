<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'mec ';
$_SESSION['nom'] = 'inconnu';
$_SESSION['age'] = 99;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exo2p8</title>
    </head>
    <body>
    <p>
        Salut <?= $_SESSION['prenom']; ?> !<br />
    </p>
    <p>
        <a href="exo2p8.php">clic ici</a><br />
        
    </p>
    </body>
</html>