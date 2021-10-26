<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Formulario.css">
    <title>Formulario HTML y codigo PHP</title>
</head>
<body>
<h1> Los datos obtenidos del formulario son: </h1>
<?php
$nombre = $_GET["fnombre"];
$apellidos = $_GET["fapellido"];


echo " <style > h2{text-align: center; font-size: 30px}</style> <h2>"  ,"Nombre:" ,$nombre ,"</h2> <br>";
echo "<h2> Apellidos: $apellidos </h2>";
?>

</body>
</html>



