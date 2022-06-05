<?php


$conexion = mysqli_connect("localhost","root","","login_register_db");

if ($conexion) {
    echo 'conectado a la base de datos exitosamente';
}else{
    echo 'no se ha podido conectar a la base de datos';
}

?>