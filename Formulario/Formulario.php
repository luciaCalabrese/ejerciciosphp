<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Formulario.css">
    <title>Document</title>
</head>
<body>


    <form action="Formula.php" method="get">
    <div id="formulario">
        <h1> Datos Personales </h1>
    </div>

    <div id="tabla-formulario">
        <label for="nombre">Nombres</label>
        <input placeholder="Ingrese su nombre..." name="fnombre" type="text"  required>

        <label for="apellido">Apellidos</label>
        <input placeholder="Ingrese su apellido..." name="fapellido" type="text"  required>

    </div>
    <button name="registro" type="submit" id="button" onclick="alert('El formulario ha sido enviado con exito')"> Enviar </button>
</form>
</body>
</html>


