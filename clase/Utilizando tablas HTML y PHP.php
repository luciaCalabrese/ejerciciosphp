<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Formulario/Formulario.css">
    <title>Document</title>

</head>
<body>
<?php

//Ejercicio 1
echo "<h2> Tabla de numeros del 1 al 100 </h2>";

echo "<table border= 1>";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
    echo "<tr>";
    for ($n2=1; $n2<=10; $n2++)
    {
        echo "<td>", $n, "</td>";
        $n=$n+1;
    }
    echo "</tr>";
}
echo "</table>";

//Ejercicio 2
echo "<br>", "<h2>Tablas de multiplicar </h2>";
$numero = 1;

echo "<table border='1'>";

for ($j = 1; $j<=10; $j++){
    echo "<td colspan='10' align='center' bgcolor='aqua'>tabla del $j</td>";
    echo "<tr>";
    for ($k = 1; $k <=10; $k++) {

        $numero = $k * $j;
        echo "<td>". $k ."</td> <td>* </td> <td>" .$j ."</td> <td>  = </td> <td>" .$numero ."</td></tr>";

    }
}
echo "</table>";
echo "<br><br>";

//Ejercicio 3
echo "<h1>Mapa de la clase </h1>";
echo "<table border='1'>";

echo "<tr><td colspan='3'>Alumnos</td></tr>";
echo "<tr><td>Carmen</td><td>Javier</td><td></td></tr>";
echo "<tr><td>Angel</td><td>Nicolas</td><td>Sergio</td></tr>";
echo "<tr><td>Salvador</td><td></td><td>Antonio</td></tr>";
echo "<tr><td>Lucia</td><td></td><td>Lucas</td></tr>";
echo "</table>";


?>
</body>
</html>

