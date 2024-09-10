<?php
session_start();
if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
    header('location:login/login.php');
}

?>

<style>
    ul li:nth-child(2) .activo {
        background: rgb(11, 150, 214) !important;
    }
</style>

<!-- primero se carga el topbar -->
<?php require('./layout/topbar.php'); ?>
<!-- luego se carga el sidebar -->
<?php require('./layout/sidebar.php'); ?>

<!-- inicio del contenido principal -->
<div class="page-content">

    <h4 class="text-center text-secondary">LISTA DE REGISTRO DE VISITANTES</h4>

    <?php
    include "../modelo/conexion.php";
    include "../controlador/controlador_eliminar_visitante.php";

    $sql = $conexion->query(" SELECT * FROM `visitantes`");
    ?>

    <table id="example" class="table table-bordered table-hover col-12">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">DNI</th>
                <th scope="col">ENTRADA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($datos = $sql->fetch_object()) { ?>
                <tr>
                    <td><?= $datos->id_visitante ?></td>
                    <td><?= $datos->nombre ?></td>
                    <td><?= $datos->apellido ?></td>
                    <td><?= $datos->dni ?></td>
                    <td><?= $datos->entrada ?></td>
                    <td>
                        <a href="lista_visitantes.php?id=<?= $datos->id_visitante ?>" onclick="advertencia(event)"
                            class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php }
            ?>

        </tbody>
    </table>

</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>