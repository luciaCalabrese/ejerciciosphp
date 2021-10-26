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
<form action="conv.php" method="get">
    <div id="formulario">
        <h1> Convertor </h1>
    </div>

    <div id="tabla-formulario">
        <label for="euros">Euros</label>
        <input placeholder="Ingrese el monto..." name="euros" type="text"  required> <br><br>

        <select name="moneda" required>
            <option value="value1">D&oacute;lares</option>
            <option value="value2">Pesetas </option>
        </select>
        <br><br>
    </div>
    <button name="registro" type="submit" id="button" onclick="alert('El formulario ha sido enviado con exito')"> Enviar </button>
</form>
</body>
</html>


