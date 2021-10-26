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
$moneda = $_GET["euros"];
$iva = $_GET["moneda"];

if (isset($iva)){
    switch ($iva){
        case "value1":
            printf("La cantidad en d&oacute;lares es %.2f" , $moneda*0.91);
            break;
        case "value2":
            printf("La cantidad en pesetas es: %.2f", moneda*166);
            break;
    }
}
?>
</body>
</html>


