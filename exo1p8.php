<?php

$agent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['SERVER_ADDR'];
$name = $_SERVER['SERVER_NAME'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?= $agent.'<br/>'.$ip.'<br/>'.$name?>

   
</body>
</html>