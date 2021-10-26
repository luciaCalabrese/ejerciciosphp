<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays en PHO con ciclo for</title>
</head>
<body>
<?php
print  " Es un array hemos almacenado los n&uacute;meros pares: <br>";
for ($i = 0; $i<10; $i ++)
    $pares[$i] = $i *2;
for ($i= 0; $i<10; $i++)
    echo "$pares[$i] <br>";
$museos["Valencia"] = "Museu d`Historia de valencia";
$museos["Madrid"] = "Museo nacional de Ciencias Naturales";
$museos["Barcelona"] = "Museo Picasso de Barcelona";

$comidas = array("Paella", "Tortilla", "Cocido");
echo "Men&uacute; :", $comidas[0]. "," .$comidas[1]. " and " .$comidas[2]. ",";

$semana=array("Martes","Miercoles", "Jueves");

//Agrega los diferentes valores al array
$semana.array_push($semana, "Viernes", "Sabado", "Domingo");

//Agrega los valores al inicio del array
$semana.array_unshift($semana, "Lunes");
for ($i = 0; $i<7; $i++)
    echo "$semana[$i] <br>"



?>
</body>
</html>


