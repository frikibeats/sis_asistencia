<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@0;1&display=swap" rel="stylesheet">

    <!-- pNotify -->
    <link href="../public/pnotify/css/pnotify.css" rel="stylesheet" />
        <link href="../public/pnotify/css/pnotify.buttons.css" rel="stylesheet" />
        <link href="../public/pnotify/css/custom.min.css" rel="stylesheet" />
    <!-- pnotify -->
        <script src="../public/pnotify/js/jquery.min.js">
        </script>
        <script src="../public/pnotify/js/pnotify.js">
        </script>
        <script src="../public/pnotify/js/pnotify.buttons.js">
        </script>
        
</head>

<body>
    <h1>Registre la asistencia</h1>
    <h2 id="fecha"></h2>

    <?php
    include "../modelo/conexion.php";
    include "../controlador/controlador_registrar_visitante.php";
    ?>

<div class="container">
    <p class="dni">Ingrese su DNI</p>
    <input type="text" placeholder="DNI del empleado" name="txtdni" id="dni">

    <div class="button">
        <button id="boton">BUSCAR</button>
    </div>

    <form action="" method="POST">
        <!-- Campos que deben enviarse con el formulario -->
        <div class="dni">
            <div class="label">
                <h2>DNI</h2>
            </div>
            <div class="res">
                <input id="doc" name="dni" readonly type="text">
            </div>
        </div>

        <div class="nombre">
            <div class="label">
                <h2>Nombre</h2>
            </div>
            <div class="res">
                <input id="nombre" name="nombre" readonly type="text">
            </div>
        </div>

        <div class="apellido">
            <div class="label">
                <h2>Apellido</h2>
            </div>
            <div class="res">
                <input id="apellido" name="apellido" readonly type="text">
            </div>
        </div>

        <div class="botones">
            <button class="entrada" type="submit" name="btnentrada" value="ok">ENTRADA</button>
            <button class="salida" type="submit" name="btnsalida" value="ok">SALIDA</button>
        </div>
    </form>
</div>

    
    <script src="login/js/apiconsulta.js" type="text/javascript"></script>

    <script>
        setInterval(() => {
            let fecha = new Date();
            let fechaHora = fecha.toLocaleString();
            document.getElementById("fecha").textContent = fechaHora;
        }, 1000);
    </script>
</body>

</html>