<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Calculadora.css">
    <title>Document</title>
</head>
<body>

<section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>Calculadora</h2>
        </section>
    </section>

    <form action="Funcion.php"  method="get" class="form_contact">
        <h2>Envia un mensaje</h2>
        <div class="user_info">
            <label for="valor1">valor 1</label>
            <input type="text" id="names" name="valor1">

            <label for="phone">Valor 2</label>
            <input type="text" id="phone" name="valor2">
            <br>
            <select name="opcion" required>
                <option value="value1">Suma</option>
                <option value="value2">Resta </option>
                <option value="value3">Multiplicacion </option>
                <option value="value4">Divicion </option>
            </select>
            <br>
            <input type="submit" value="Enviar" id="btnSend">
        </div>
    </form>

</section>
</body>
</html>

