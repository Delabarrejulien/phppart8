<?php
session_start(); // On démarre la session AVANT toute chose
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>retour exo2p8</title>
    </head>
    <body>
    <p>
        hé <?=  $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
        déja <?=  $_SESSION['age']; ?> ans... :-D
    </p>
    </body>
</html>