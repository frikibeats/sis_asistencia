<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query(" delete from visitantes where id_visitante=$id ");
    if ($sql == true) { ?>
        <script>
            $(function notificacion() {
                new PNotify({
                    title: "Correcto",
                    type: "success",
                    text: "Asistencia eliminada correctamente",
                    styling: "bootstrap3"
                })
            })
        </script>
    <?php } else { ?>
        <script>
            $(function notificacion() {
                new PNotify({
                    title: "Incorrecto",
                    type: "error",
                    text: "Error al eliminar",
                    styling: "bootstrap3"
                })
            })
        </script>
    <?php  } ?>

    <script>
        setTimeout(() => {
            window.history.replaceState(null, null, window.location.pathname);
        }, 0);
    </script>
<?php }
