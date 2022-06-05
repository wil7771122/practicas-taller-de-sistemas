<?php

include("data_base.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM persona WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_array($resultado);
        $nombre = $fila['nombre'];
        $apaterno = $fila['apaterno'];
        $amaterno = $fila['amaterno'];
        $telefono = $fila['telefono'];
        $direccion = $fila['direccion'];
    }
}

if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $consulta = "UPDATE persona set
    nombre = '$nombre', apaterno = '$apaterno',
    amaterno = '$amaterno', telefono = '$telefono',
    direccion = '$direccion' WHERE id = $id";
    mysqli_query($conexion, $consulta);

    $_SESSION['mensaje'] = 'Datos Actualizados Satisfactoriamente';
    $_SESSION['tipo_de_mensaje'] = 'success';

    header("Location: index.php");
}

?>

<?php include("includes/cabecera.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="apaterno" value="<?php echo $apaterno; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="amaterno" value="<?php echo $amaterno; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Direccion</label>
                        <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control">
                    </div>

                        

                    <button class="btn btn-success" name="actualizar">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>