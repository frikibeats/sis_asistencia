<?php
if (!empty($_POST["btnentrada"])) {
    if (!empty($_POST["dni"])) {
        $dni=$_POST["dni"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $fecha = date("Y-m-d H:i:s");
        $sql=$conexion->query(" insert into visitantes(nombre,apellido,dni,entrada) values('$nombre','$apellido','$dni','$fecha')  ");
        if ($sql==true) { ?>
            <script>
            $(function notificacion() {
                new PNotify({
                    title: "CORRECTO",
                    type: "success",
                    text: "Asistencia Registrada",
                    styling: "bootstrap3"
                })
            })
        </script>
        <?php } else { ?>
            <script>
            $(function notificacion() {
                new PNotify({
                    title: "INCORRECTO",
                    type: "error",
                    text: "Erorr al registrar asistencia",
                    styling: "bootstrap3"
                })
            })
        </script>
        <?php }
        
    } else { ?>
        <script>
            $(function notificacion() {
                new PNotify({
                    title: "INCORRECTO",
                    type: "error",
                    text: "Ingrese el DNI",
                    styling: "bootstrap3"
                })
            })
        </script>
    <?php } ?>
    <script>
        setTimeout(() => {
            window.history.replaceState(null, null, window.location.pathname);
        }, 0);
    </script>

<?php }

?>
