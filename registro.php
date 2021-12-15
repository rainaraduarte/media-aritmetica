<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$media;

$media = ($nota1 + $nota2)/2;
echo "<h3> A média aritmética entre $nota1 e $nota2 é igual a $media!</h3>";

?>
</body>
</html>
