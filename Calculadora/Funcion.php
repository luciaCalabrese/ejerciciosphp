<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Calculadora.css">
    <link rel="stylesheet" href="../Formulario/Formulario.css">
    <title>Document</title>
</head>
<body>
<h1> El resultado es: </h1>
<?php

$Valor1 = $_GET["valor1"];
$Valor2 = $_GET["valor2"];
$opcion = $_GET["opcion"];

if (isset($opcion)){
switch ($opcion){
    case "value1":
        echo "<style > h2{text-align: center; font-size: 30px}</style> <h2> El resultado de la suma es: " , $Valor1+$Valor2,"</h2>";
        break;
    case "value2":
        echo "<style > h2{text-align: center; font-size: 30px}</style> <h2> El resultado de la resta es: ", $Valor1-$Valor2, "</h2>";
        break;
    case "value3":
        echo " <style > h2{text-align: center; font-size: 30px}</style> <h2> El resultado de la multiplicacion es: ", $Valor1*$Valor2, "</h2>";
        break;
    case "value4":
        echo "<style > h2{text-align: center; font-size: 30px}</style> <h2> El resultado de la divicion es: ", $Valor1/$Valor2, "</h2>";
}
}
?>
</body>
</html>


