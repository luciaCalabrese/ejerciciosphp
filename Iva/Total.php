<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Iva.css">
    <link rel="stylesheet" href="../Formulario/Formulario.css">
    <title>Document</title>
</head>
<body>
<h1> La factura segun los valores introducidos es: </h1>
<?php

$precio = $_GET["Precio"];
$precio2 = $_GET["Precio2"];
$precio3 = $_GET["Precio3"];

$iva = $_GET["iva"];
$iva2 = $_GET["iva2"];
$iva3 = $_GET["iva3"];

$precios1 = $precio*0.21;
$precios2= $precio*0.10;
$precios3 = $precio*0.04;

$precios4 = $precio*0.21;
$precios5 = $precio*0.21;
$precios6 = $precio*0.21;

$precios7 = $precio*0.21;
$precios8 = $precio*0.21;
$precios9 = $precio*0.21;

$producto = $_GET["p1"];
$producto2 = $_GET["p2"];
$producto3 = $_GET["p3"];


$total = $precios1 + $precios2 + $precios3 + $precios4 + $precios5 + $precios6 + $precios7 + $precios8 + $precios9;
echo "<hr>";
echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>Los productos son : ", $producto, " ", $producto2," " , $producto3, "<br></h2>";
echo "<hr>";
if (isset($iva)){
    echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>El subtotal es: ", $precio + $precio2 + $precio3, "<br></h2>";
    echo "<hr>";
    switch ($iva){
        case "veinti1":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>El monto del iva del producto1 es: " , $precios1 ,"<br></h2>";
            echo "<hr>";
            break;
        case "diez":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>El monto del iva del producto1 es: " , $precios2 ,"<br></h2>";
            echo "<hr>";
            break;

        case "cuatro":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>El monto del iva del producto1 es: " , $precios3 ,"<br></h2>";
            echo "<hr>";
            break;
    }
    switch ($iva2){
        case "veinti11":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>El monto del iva del producto2 es: " , $precios4 ,"<br> </h2>";
            echo "<hr>";
            break;
        case "diez1":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2> El monto del iva del producto2 es: " , $precios5 ,"<br></h2>";
            echo "<hr>";
            break;

        case "cuatro1":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>El monto del iva del producto2 es: " , $precios6 ,"<br> </h2>";
            echo "<hr>";
            break;
    }
    switch ($iva3){
        case "veinti2":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2> El monto del iva del producto3 es: " , $precios7 ,"<br></h2>";
            echo "<hr>";
            break;
        case "diez2":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2> El monto del iva del producto3 es: " , $precios8 ,"<br> </h2>";
            echo "<hr>";
            break;

        case "cuatro2":
            echo "<hr>";
            echo "<style > h2{text-align: center; font-size: 30px}</style> <h2> El monto del iva del producto3 es: " , $precios9 ,"<br> </h2>";
            echo "<hr>";
            break;
    }
}
echo "<hr>";
echo "<style > h2{text-align: center; font-size: 30px}</style> <h2>El total sin descuento es: ", $total ,"<br></h2>";
echo "<hr>";
echo "<style > h2{text-align: center; font-size: 25px}</style> <h2>El total final con el descuento es: " ,$total -($total *0.05), "</h2>";
?>


</body>
</html>

<?php

