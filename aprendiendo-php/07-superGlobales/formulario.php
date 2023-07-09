<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>FORMULARIO EN PHP</title>

    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <?php #FUNCION GET PARA OBTENER UN PARAMETRO?>
        <form method="GET" action="recibir.php">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            </p>

            <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            </p>

            <input type="submit" value="Enviar Datos"/>
        </form>
    </body>



</html>