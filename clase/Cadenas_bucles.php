<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../Formulario/Formulario.css">
</head>
<body>
<?php
//Ejercicio 1
$var1 = 'Hola ';
$var2 = 'Como estas';
$texto_completo = $var1 . $var2;
echo "La nueva cadena es: ", $texto_completo;

//Ejercicio 2

echo "<h2>Tabla del 1</h2>";
for ($i = 0; $i<11;$i++){
    echo $i*1 ,"<br>";
}

//Ejercicio 3
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



