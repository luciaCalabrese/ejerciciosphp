<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busqueda de viviendas en valencia</title>
    <link rel="stylesheet" href="../Calculadora/Calculadora.css">
</head>
<body>
<form action="ft.php" method="get">
    <div id="formulario">
        <h1> Busqueda de viviendas en valencia </h1>
    </div>
    <br>
    <div id="tabla-formulario">
        <label for="">Tipo de vivienda</label>
        <select name="" id="opcion">
            <option>Piso</option>
            <option>Adosado</option>
            <option>Chalet</option>
            <option value="">Casa</option>
        </select>
        <br> <br>
        <label for="">Zona</label>
        <select name="" id="opcion">
            <option>Valencia Capital</option>
            <option>Poblados del norte</option>
            <option>Poblados del sur</option>
            <option value="">Poblados del oeste</option>
        </select>
        <br><br>
        <label for="">Direccion</label>
        <input type="text">

        <label for="">Direccion</label>
        <input type="number" max="5" min="1">
    </div>
    <button name="registro" type="submit" id="button" onclick="alert('El formulario ha sido enviado con exito')"> Enviar </button>
</form>
</body>
</html>


