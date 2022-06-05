<?php

include("data_base.php");

if (isset($_POST['guardar_tarea'])) {
    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $consulta = "INSERT INTO persona(nombre, apaterno, amaterno, telefono, direccion) VALUES 
    ('$nombre', '$apaterno', '$amaterno', '$telefono', '$direccion')";
    $resultado = mysqli_query($conexion, $consulta);
    if(!$resultado){
        die("consulta fallida");
    }

    $_SESSION['mensaje'] = 'Datos Guardados satisfactoriamente';
    $_SESSION['tipo_de_mensaje'] = 'success';
    
    header("Location: index.php");
}
