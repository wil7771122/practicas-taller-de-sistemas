<?php

session_start();

/* conexion a la base de datos */
$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'formulario'
);

// if(isset($conexion)){
//     echo "la base de datos esta conectada";
// }
?>