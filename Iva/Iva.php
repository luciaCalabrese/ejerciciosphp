<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Iva.css">
    <title>Document</title>
</head>
<body>
<form action="Total.php" method="get">
    <h1>Calcular pedido</h1>
    <hr size="8px" color="black">

    <label for="">Producto 1: </label>
    <input type="text" name="p1">

    <label for="">Precio: </label>
    <input type="number" name="Precio" min="5">

    <label for="">Porcentaje de iva: </label>
    <select name="iva" id="">
        <option value="veinti1">21%</option>
        <option value="diez">10%</option>
        <option value="cuatro">4%</option>
    </select>
    <hr size="8px" color="black">

    <label for="">Producto 2: </label>
    <input type="text" name="p2">

    <label for="">Precio: </label>
    <input type="number" name="Precio2" min="5">

    <label for="">Porcentaje de iva: </label>
    <select name="iva2" id="">
        <option value="veinti11">21%</option>
        <option value="diez1">10%</option>
        <option value="cuatro1">4%</option>
    </select>

    <hr size="8px" color="black">
    <label for="">Producto 3: </label>
    <input type="text" name="p3">
    <label for="">Precio: </label>
    <input type="number" name="Precio3" min="5">

    <label for="">Porcentaje de iva: </label>
    <select name="iva3" id="">
        <option value="veinti12">21%</option>
        <option value="diez2">10%</option>
        <option value="cuatro2">4%</option>
    </select>
    <hr size="8px" color="black">
    <input type="submit" value="Calcular">
</form>
</body>
</html>

<?php
