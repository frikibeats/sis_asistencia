<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Bienvenidos, Registre su asistencia</h1>
    <h2 id="fecha"></h2>
    <div class="container">
        <a class="acceso" href="vista/login/login.php">Ingresar al sistema</a>
        <p class="dni">Ingrese su DNI</p>
        <form action="">
            <input type="text" placeholder="DNI del empleado" name="txtdni">
            <div class="botones">
                <a class="entrada" href="">ENTRADA</a>
                <a class="salida" href="">SALIDA</a>

                <button type="submit" name="btnentrada" value="ok">ENTRADA</button>
                <button type="submit" name="btnsalida" value="ok">SALIDA</button>

            </div>
        </form>
    </div>

    <script>
        setInterval(() => {
            let fecha = new Date();
            let fechaHora = fecha.toLocaleString();
            document.getElementById("fecha").textContent = fechaHora;
        }, 1000);
    </script>
</body>

</html>