<?php include("data_base.php") ?>

<?php include("includes/cabecera.php") ?>

<div class="container-fluid p-4 border">

    <div class="row">

        <div class="col-md-3">

            <?php if (isset($_SESSION['mensaje'])) { ?>

                <div class="alert alert-<?= $_SESSION['tipo_de_mensaje']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>

            <div class="card card-body">
                <form action="crear.php" method="POST">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="" autofocus>
                    </div>

                    <!-- nuevos campos -->
                    <div class="form-group">
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="apaterno" class="form-control" placeholder="" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="amaterno" class="form-control" placeholder="" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="text" name="telefono" class="form-control" placeholder="" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" name="direccion" class="form-control" placeholder="" autofocus>
                    </div>




                    <input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="Guardar Datos">
                </form>
            </div>
        </div>

        <div class="col-md-9">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consulta = "SELECT * FROM persona";
                    $resultado = mysqli_query($conexion, $consulta);

                    while ($fila = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                            <td><?php echo $fila['id'] ?></td>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['apaterno'] ?> </td>
                            <td><?php echo $fila['amaterno'] ?> </td>
                            <td><?php echo $fila['telefono'] ?> </td>
                            <td><?php echo $fila['direccion'] ?> </td>
                            <td>
                                <a href="actualizar.php?id=<?php echo $fila['id'] ?>" class="btn btn-success" title="Editar">Editar

                                
                                <a href="eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger" title="Eliminar">Eliminar

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

</div>

<?php include("includes/footer.php") ?>