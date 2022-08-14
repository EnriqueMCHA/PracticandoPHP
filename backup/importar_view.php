<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Importar BD</title>
</head>

<body>
    <h1>Importar base de datos 👻</h1>
    <h2><?php @session_start(); if($_SESSION['mensaje']){echo $_SESSION['mensaje'];} ?></h2>

    <form action="#" method="post">
        <label for="bd">Nombre:</label>
        <input type="text" name="bd" id="bd">
        <br><br>
        <label for="sql">Base de datos (.SQL):</label>
        <input type="file" name="sql" id="sql" />
        <br><br>
        <button>Importar</button>
    </form>
</body>

</html>