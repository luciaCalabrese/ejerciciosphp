<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Formulario/Formulario.css">
    <title>Funciones en PHP</title>
</head>
<body>
<h1> Promedio de Notas 1ev</h1>
<?php
$nombre = $_GET["fnombre"];
$codigoalum = $_GET["fcod"];
$nota1 = $_GET["fn1"];
$nota2 = $_GET["fn2"];
$nota3 = $_GET["fn3"];
$nota4 = $_GET["fn4"];
$nota5 = $_GET["fn5"];
$nota6 = $_GET["fn6"];
$nota7 = $_GET["fn7"];
$nota8 = $_GET["fn8"];



$promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + $nota8)/8;
echo "El alumno: " .trim($nombre). "<br>Tiene un promedio de: ".$promedio;

?>
</body>
</html>

