<?php
if(!empty($_POST['psuedo'])){

    setcookie('user',$_POST['psuedo']);

}
if(!empty($_POST['code'])){

    setcookie('mdp',$_POST['code']);

}


if(isset($_COOKIE['user'])){
    echo 'Votre psuedo est  ' .$_COOKIE['user'];
}
if(isset($_COOKIE['user'])){
    echo 'Votre code est  ' .$_COOKIE['mdp'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3p8</title>
</head>
<body>

<form action="" method="post">
<p>psuedo</p> 
<input type="text" name="psuedo" placeholder="psuedo">
<br>
<p>mot de passe</p>
<input type="text" name="code" placeholder="code">
<br><br>
 

<button class="btn btn-primary">ok</button>


</form>

   
</body>
</html>