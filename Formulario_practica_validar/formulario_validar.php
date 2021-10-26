<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Formulario/Formulario.css">
    <link rel="icon" href="delfin.jpg">
    <title>Datos personales</title>
</head>
<body>
<br> <br>
<form action="Verificar.php" method="post">
    <div id="formulario">
        <h1> Datos Personales </h1>
    </div>

    <div id="tabla-formulario">
        <label for="nombre">Nombres</label>
        <input placeholder="Ingrese su nombre..." name="fnombre" type="text"  required>

        <label for="dni">DNI</label>
        <input placeholder="Ingrese su dni..." name="fdni" type="text"  required >

        <label for="Dirección">Dirección</label>
        <input placeholder="Ingrese su dirección..." name="fdirec" type="text"  required>

        <label for="Cp">Codigo postal</label>
        <input placeholder="Ingrese su codigo postal..." name="fcp" type="text"  required>

        <label for="tel">Teléfono</label>
        <input placeholder="Ingrese su telefono..." name="ftelefono" type="tel"  required>

        <label for="email">Email</label>
        <input placeholder="Ingrese su email..." name="fmail" type="email">

        <label for="cv">Codigo del vendedor</label>
        <input placeholder="Ingrese el codigo del vendedor..." name="fcv" type="text"  required maxlength="3">

        <label for="total">Monto total de la factura</label>
        <input placeholder="Ingrese el monto total de la factura..." name="ft" type="number"  required min="0" >

    </div>
    <button name="registro" type="submit" id="button" onclick="validardni()"> Enviar </button>
</form>
</body>
</html>


