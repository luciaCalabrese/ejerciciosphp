<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP ejemplos</title>
</head>
<body>
<?php
$cadena = " Hoy es lunes ";
echo $cadena;
echo strlen($cadena);
echo "<br>";
$resultado = sprintf("8*5 = %d <br>", 8*5);
echo $resultado ,"<br>";
echo substr("Devuelve una subcadena de otra", 9,3),"<br><br>";
if (chop("Cadena \n \n") == "Cadena")
    echo "Iguales <br><br>";
echo str_replace("azul","verde", "Atrapados en tu mirada azul como en tus sueños..."),"<br>";
echo strlen(trim($cadena));

?>

</body>
</html>