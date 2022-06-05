<?php

include 'conexion_bd.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];



$password = hash('sha512', $password);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) VALUES('$nombre_completo', '$correo', '$usuario', '$password')";

/*verificar si los datos se repiten en la base de datos*/
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("este correo ya esta registrado, intenta con otro diferente");
        window,location = "../index.php";
    </script>
    ';
    exit;
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
        alert("este nombre de usuario ya esta registrado, intenta con otro diferente");
        window,location = "../index.php";
    </script>
    ';
    exit;
}



$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script> 
    alert("Usuario registrado exitosamente");
    window.location = "../index.php";
    </script>
    ';
} else {
    echo '
    <script> 
    alert("Intentalo de nuevo, usuario no registrado");
    window.location = "../index.php";
    </ºscript>
    ';
}

mysqli_close($conexion);
