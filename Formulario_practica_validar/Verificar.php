<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="verificar.css">
    <title>Document</title>
</head>
<body>
<?php
$nombre = $_POST["fnombre"];
$dni = $_POST["fdni"];
$direccion = $_POST["fdirec"];
$codigopostal = $_POST["fcp"];
$telefono = $_POST["ftelefono"];
$email = $_POST["fmail"];
$codigovendedor = $_POST["fcv"];
$total = $_POST["ft"];

if(validarUsuario($nombre)){
    echo "<h2>nombre correcto</h2>";
} else {
    echo "<h2>nombre incorrecto</h2>";
}
$letras=array("T","R","W","A","G","M","Y","F","P","D","X",
    "B","N","J","Z","S","Q","V","H","L","C","K","E");
if ((strlen($dni)!=9) || (!is_long($entero=intval(substr($dni,0,8)))) ||
    (!in_array($letra=strtoupper(substr($dni,8,1)),$letras)) || ($letra!=$letras[$entero%23]))
    echo "<h2>dni correcto</h2>";
else
    echo  "<h2>dni incorrecto</h2>";

if(is_string($direccion)){
    echo "<h2>Direccion correcta</h2>";
} else {
    echo "<h2>Direccion incorrecta</h2>";
}

if(validarTelefono($telefono)){
    echo "<h2>telefono correcto</h2>";
} else {
    echo "<h2>telefono incorrecto</h2>";
}
if(validarEmail($email)){
    echo "<h2>email correcto</h2>";
} else {
    echo "<h2>email incorrecto</h2>";
}
if ($codigovendedor.is_string($codigovendedor)){
    echo  "<h2>codigo vendedor correcto</h2>";
} else{
    echo   "<h2>codigo vendedor incorrecto</h2>";
}
if ($total.is_nan($total)){
    echo  "<h2>total correcto</h2>";
}else{
    echo  "<h2>total incorrecto</h2>";
}

function validarTelefono($numero){
    $reg = "#^\(?\d{2}\)?[\s\.-]?\d{4}[\s\.-]?\d{4}$#";
    return preg_match($reg, $numero);
}
function validarEmail($email){
    $reg = "#^(((([a-z\d][\.\-\+_]?)*)[a-z0-9])+)\@(((([a-z\d][\.\-_]?){0,62})[a-z\d])+)\.([a-z\d]{2,6})$#i";
    return preg_match($reg, $email);
}
function validarUsuario($nombre) {
    return preg_match('/^[\p{L} ]+$/u',$nombre);
}


?>
</body>
</html>


