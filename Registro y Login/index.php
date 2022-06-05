<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("location: bienvenida.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="">

    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">
                <img src="img/user.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                Login y registro
            </a>
        </div>
    </nav>

    <div class="container overflow-hidden">
        <div class="row mt-5 gx-5 align-items-center">
            <div class="col-6">
                <div class="p-3 border border rounded bg-primary">
                    <form action="php/login_usuario.php" method="POST" class="formulario__login  ">
                        <div class="mb-3">
                            <h2 class="text-light">Iniciar Sesión</h2>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electronico" name="correo">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary border">Entrar</button>
                    </form>
                </div>


            </div>

            <div class="col-6">
                <div class="p-3 border rounded bg-primary">
                    <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                        <div class="mb-3">
                            <h2 class="text-light">Regístrarse</h2>
                            <input type="text" class="form-control" placeholder="Nombre completo" name="nombre_completo">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Correo Electronico" name="correo">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Contraseña" name="password">
                        </div>
                        <button class="btn btn-primary border">Regístrarse</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>