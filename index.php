<!DOCTYPE html>
<html lang="es">

<head>
    <title>Punto de venta | Iniciar Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/logincss.css">
</head>

<body>
    <div id="sesion">
        <form action="login.php" method="POST">
            <h2 id="inicio" class="text-center">Inicio de Sesión</h2>
            <div id="nombre" class="text-center"><h1>Punto de Venta</h1></div>
            <input type="text" name="user" value="" placeholder="Usuario" class="campo form-control  col-12">
            <input type="password" name="pass" value="" placeholder="Contraseña" class="campo form-control  col-12">
            <input type="submit" value="Acceder" name="submit" class="btn-campo btn btn-primary form-control  col-12">
        </form>
    </div>

    <div id="promocion">
    
    </div>

    <footer id="creditos">
        <h7>Punto de venta.</h7>
    </footer>

</body>

</html>