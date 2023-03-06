<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>

    <!--favicon-->
    <link rel="icon" type="image/jpg" href="../multimedia/imagenes/decoros/logo.png" />


    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/349b369734.js" crossorigin="anonymous"></script>

    <!--BS5-->
    <link rel="stylesheet" href="../estilos/styles.css">
    <script src="../bs5/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!--mi JS-->
    <script src="../scripts/registro.js"></script>
    <script src="../scripts/cambios.js"></script>

    


</head>

<body>
<?php
    if (!isset($_SESSION)) {
        // inicio la sesión
        session_start();
    }
    
    ?>

    <header class=" text-white ">
        <!--encabezado-->
        <div class="container-fluid d-flex justify-content-center p-3  bg-encabezado bg-primary">

            <div class="row w-100">
                <!--Titulo-->
                <div class="col d-flex flex-column justify-content-center mt-2">
                    <p class="h1 titulo text-center "><a href="index.php" class="nav-link">Props Web</a>
                    </p>
                </div>
                <!--//Titulo-->
            </div>
        </div>
        <!--//encabezado-->
    </header>
    <?php
    
        if (isset($_SESSION["autenticado"]) == true) {
            // inicio la sesión
            echo 'redi';
            header("Location:index.php");
        }
    ?>
    <!--body-->
    <div class=" d-flex flex-column justify-content-center align-items-center my-5">
        <!-- Tab links -->
        <div class="tab">

            <button class="tabLinks btn btn-outline-dark fs-5" onclick="openTabsRegistro(event, 'inicio')">Iniciar
                sesion</button>

            <button class="tabLinks btn btn-outline-dark fs-5" onclick="openTabsRegistro(event, 'registro')" id="defaultOpen">Registrarse</button>
        </div>
        <!-- //Tab links -->

        <!--form inicio sesion-->
        <div id="inicio" class="tabContent">
            <div class="bg-light p-5 rounded-5 shadow" style="width: 25rem">
                <form action="#" method="post">

                    <div class="text-center fs-1 fw-bold">Iniciar sesion</div>
                    <div class="input-group mt-4">
                        <div class="input-group-text ">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <!--usuario-->
                        <input class="form-control " name="usuarioI" type="text" placeholder="Usuario" />
                    </div>
                    <div class="input-group mt-1">
                        <div class="input-group-text ">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <!--contraseña-->
                        <input class="form-control " name="passI" type="password" placeholder="Contraseña" />
                    </div>

                    <span class="text-danger-emphasis">
                        <?php
                        include "../php/registro.inc.php"
                        ?>
                    </span>
                    <!--submit-->
                    <button type="submit" name="enviar" value="inicio" class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm">
                        Acceder
                    </button>
                    <div class="d-flex gap-1 justify-content-center mt-1">
                        <div>¿Aún no tienes cuenta?</div>
                        <a href="#" class="text-decoration-none text-info fw-semibold" onclick="openTabsRegistro(event, 'registro')">Registrarse</a>
                    </div>
                </form>
            </div>
        </div>

        <div id="registro" class="tabContent">
            <!--form registro-->
            <div class="bg-light p-5 rounded-5 shadow " style="width: 25rem">
                <form action="#" method="post">
                    <div class="row gap-3">
                        <div class="text-center fs-1 fw-bold">Registrarse</div>

                        <input class="form-control " name="usuario" id="usuario" type="text" placeholder="Usuario" />
                        <span id="errUs" class="text-danger-emphasis"></span>

                        <input class="form-control " name="pass" id="pass" type="text" placeholder="Contraseña" />
                        <span>(minimo 8 Digitos una mayuscula y numero, sin caracteres especiales)</span>
                        <span id="errPass" class="text-danger-emphasis"></span>

                        <input class="form-control " name="pass2" id="pass2" type="text" placeholder="Repetir contraseña" />
                        <span id="errPass2" class="text-danger-emphasis"></span>

                        <input class="form-control " name="nombre" id="nombre" type="text" placeholder="Nombre" />
                        <span id="errNombre" class="text-danger-emphasis"></span>

                        <input class="form-control " name="apellidos" id="apellidos" type="text" placeholder="apellidos" />
                        <span id="errApellido" class="text-danger-emphasis"></span>

                    </div>
                    <span class="text-danger-emphasis">
                        <?php include "../php/registro.inc.php" ?>
                    </span>
                    <!--submit-->
                    <button type="submit" id="submit" name="enviar" value="registro" class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm disabled"><!--disabled-->
                        Registrarse
                    </button>


                </form>
            </div>
        </div>


    </div>
    <!--//body-->

    <footer class="container-fluid bg-black mb-0">
        <div class="container text-light">
            <div class="row p-4">
                <!--cambio de idioma-->
                <div class="col-12 col-lg">

                    <div class="d-flex flex-column justify-content-center">
                        <p class="fs-4">Idioma:</p>
                        <form action="../php/cambioColor.php" method="post">
                            <select name="idioma" id="idioma" class="btn btn-dark text-white mb-4">
                                <option value="español">Español</option>
                                <option value="ingles">Ingles</option>
                            </select>
                        </form>

                        <div class="d-flex flex-column justify-content-center ">
                            <!--Inicio de sesion-->
                            <button class="btn btn-outline-light text-white my-2 fs-5 fw-medium h-50"><a href="inicioSesion.php" class="nav-link ">Inicio Sesion</a></button>
                            <button class="btn btn-light fw-bolder fs-5 my-2 h-50"><a href="inicioSesion.php" class="nav-link ">Comenzar</a></button>
                            <!--//Inicio de sesion-->
                        </div>
                    </div>
                </div>

                <!--cuenta y cosas-->
                <div class="col-12 col-lg">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="text-light " href="catalogo.php">Diseños</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light " href="usuario.php">Cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light " href="#">Contacto</a>
                        </li>


                        <!--solo para administrador-->

                        <hr>
                        <p class="mb-0">Administrador:</p>
                        <hr class="w-25 my-0">
                        <li class="nav-item">
                            <a class="text-light " href="usuario.php">Vista de usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light " href="usuario.php">Vista de productos</a>
                        </li>

                        <hr>
                    </ul>
                </div>

                <!--varios-->
                <div class="col">

                    <p>

                    </p>
                </div>
            </div>
        </div>

    </footer>
</body>
<script>
    //Coje el elemento con el valor default para abrirlo
    document.getElementById("defaultOpen").click();
</script>

</html>