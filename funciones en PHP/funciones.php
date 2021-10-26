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
<form action="func.php" method="get">
    <div id="formulario">
        <h1> Notas alumnos </h1>
    </div>

    <div id="tabla-formulario">
        <label for="nombre">Nombres</label>
        <input placeholder="Ingrese su nombre..." name="fnombre" type="text"  required>

        <label for="apellido">Codigo de alumno</label>
        <input placeholder="Ingrese su apellido..." name="fcod" type="text"  required>

        <label for="apellido">Nota1</label>
        <input placeholder="Ingrese la nota" name="fn1" type="number"  required>

        <label for="apellido">Nota2</label>
        <input placeholder="Ingrese la nota" name="fn2" type="number"  required>

        <label for="apellido">Nota3</label>
        <input placeholder="Ingrese la nota" name="fn3" type="number"  required>

        <label for="apellido">Nota4</label>
        <input placeholder="Ingrese la nota" name="fn4" type="number"  required>

        <label for="apellido">Nota5</label>
        <input placeholder="Ingrese la nota" name="fn5" type="number"  required>

        <label for="apellido">Nota6</label>
        <input placeholder="Ingrese la nota" name="fn6" required>

        <label for="apellido">Nota7</label>
        <input placeholder="Ingrese la nota" name="fn7" type="number" required>

        <label for="apellido">Nota8</label>
        <input placeholder="Ingrese la nota" name="fn8" type="number"  required >
    </div>
    <button name="registro" type="submit" id="button" onclick="alert('El formulario ha sido enviado con exito')"> Enviar </button>
</form>

</body>
</html>


