<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajustes</title>

    <!--favicon-->
    <link rel="icon" type="image/jpg" href="../multimedia/imagenes/decoros/logo.png" />


    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/349b369734.js" crossorigin="anonymous"></script>

    <!--BS5-->

    <link rel="stylesheet" href="../estilos/styles.css">

    <script src="../bs5/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!--mi JS-->
    <script src="../scripts/cambios.js"></script>



</head>
<?php
$color = '';
if (isset($_COOKIE['color']))
if (!strcmp($_COOKIE['color'], 'negro')) {
    $color = 'fondo';
}
?>

<body class="<?php echo $color; ?>">
    <?php
    //si no esta la sesion
    if (!isset($_SESSION)) {
        // inicio la sesión
        session_start();
    }


    //compruebo que esta autenticado, sino al registro
    if (isset($_SESSION["autenticado"]) != true) {
        // inicio la sesión
        echo 'redi';
        header("Location:inicioSesion.php");
    }

    //exporto todas las funciones de mostrar nombre y esas pijadas
    include "../php/pijadas.inc.php";

    include "../php/productos.inc.php";
    ?>

    <!--encabezado-->
    <header class="container-fluid  bg-primary  text-white bg-encabezado">
        <div class="row py-4">
            <!--Titulo-->
            <div class="col d-flex flex-column justify-content-center mt-2">
                <p class="h1 titulo text-center">
                    <a href="index.php" class="nav-link">Props Web</a>
                </p>
            </div>
            <!--//Titulo-->

            <div class=" col-12 col-sm d-flex justify-content-center order-3 order-sm-0  ">
                <!--Menu desplegable-->
                <nav class="navbar navbar-expand-lg navbar-light d-flex flex-column justify-content-center">

                    <button onclick="xAnimation()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="h3 text-light" id="tongleNav"><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div>
                        <!--Desplegable-->
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav d-flex  align-items-center ">
                                <li class="nav-item">
                                    <a class="nav-link text-light fs-5 fw-medium" href="catalogo.php">Diseños</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light fs-5 fw-medium" href="usuario.php">Cuenta</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </nav>
                <!--//Menu desplegable-->

            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center flex-lg-row ">
                <?php
                if (isset($_SESSION["autenticado"]) != true) {

                ?>
                    <!--Inicio de sesion-->
                    <button class="btn  text-white my-2 fs-5 fw-medium "><a href="inicioSesion.php" class="nav-link ">Inicio Sesión</a></button>
                    <button class="btn btn-dark fw-bolder fs-5 my-2 "><a href="inicioSesion.php" class="nav-link ">Comenzar</a></button>
                    <!--//Inicio de sesion-->

                <?php
                } else {
                ?>
                    <i class="fa-solid fa-user ico"></i>
                    <p>Hola, <?php echo mostrarNombre($conexion) ?>
                        <a href="../php/logOut.php" class="nav-link text-dark fw-semibold text-decoration-underline">Cerrar Sesión</a>
                    </p>

                <?php
                }
                ?>
            </div>
        </div>

        <!--//encabezado-->

    </header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
        <path fill="#826541" fill-opacity="1" d="M0,64L120,85.3C240,107,480,149,720,165.3C960,181,1200,171,1320,165.3L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>
    <!--//encabezado-->

    <!--body-->
    <div class="container mb-5">
        <div class="d-flex justify-content-center my-5">
            <p class="h2">Ajustes de usuario</p>
        </div>
        <div class="row gap-4">
            <div class="col-12 col-xl-2 ">
                <!-- Tab links -->
                <div class="tab d-flex flex-column flex-md-row flex-xl-column justify-content-center gap-4 ">
                    <button class="tabLinks btn btn-outline-dark fs-5" onclick="openTabs(event, 'Datos')" id="defaultOpen">Datos</button>

                    <?php

                    if (isset($_SESSION["autenticado"]) == true)
                        if (esAdmin($conexion)) {
                    ?>
                        <button class="tabLinks btn btn-outline-dark fs-5" onclick="openTabs(event, 'usuarios')">usuarios(solo admins)</button>
                        <button class="tabLinks btn btn-outline-dark fs-5" onclick="openTabs(event, 'productos')">productos(solo admins)</button>
                    <?php
                        }
                    ?>

                </div>
                <!-- //Tab links -->
                <script>

                </script>
            </div>
            <!--Tab contenido-->
            <div class="col fs-5">

                <div id="Datos" class="tabContent ">

                    <div class="container border border-dark border-2 rounded-4 p-4 bg-white">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-user ico"></i>
                        </div>

                        <?php
                        $row = mostrarDatos($conexion);

                        ?>

                        <h3>Datos de usuario</h3><br>
                        <p>Usuario: <span><?php echo $row->usuario ?></span></p>

                        <br>
                        <p>Nombre: <span><?php echo $row->nombre ?></span></p>
                        <p>Apellidos: <span><?php echo $row->apellidos ?></span></p>




                    </div>
                </div>

                <div id="usuarios" class="tabContent">
                    <div class="container border border-dark border-2 rounded-4 p-4 bg-white">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-user ico"></i>
                        </div>
                        <h3>Todos los usuarios:</h3><br>
                        <form action="../php/usuarios.inc.php" method="post">
                            <div class="overflow-scroll" style="max-height: 300px;">
                                <table class="table">
                                    <tr class="table-primary">
                                        <th>ID</th>
                                        <th>Usuario</th>

                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th class="col-1">Admin</th>
                                        <th class="col-1">Marcar</th>
                                    </tr>

                                    <!--php inserte motrar BD-->
                                    <?php
                                    mostrarAllDatos($conexion);

                                    ?>

                                </table>
                            </div>
                            <button type="submit" name="enviar" value="borrar" class="btn bg-danger-subtle fw-bolder fs-5 my-2">Borrar</button>
                            <button type="submit" name="enviar" value="admin" class="btn btn-dark fw-bolder fs-5 my-2">Hacer Admin</button>
                            <button type="submit" name="enviar" value="noAdmin" class="btn btn-dark fw-bolder fs-5 my-2">Quitar de Admin</button>
                        </form>
                    </div>
                </div>

                <div id="productos" class="tabContent">
                    <div class="container border border-dark border-2 rounded-4 p-4 bg-white">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-cart-shopping ico"></i>
                        </div>
                        <h3>Todos los Productos:</h3><br>
                        <form action="#" method="post">
                            <div class="overflow-scroll" style="max-height: 400px;">
                                <table class="table">
                                    <tr class="table-primary">
                                        <th>ID</th>
                                        <th>nombre</th>
                                        <th>Categoria</th>
                                        <th>Estilo</th>
                                        <th>Descripcion</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>

                                    <!--php inserte motrar BD-->
                                    <?php
                                    mostrarAllProductos($conexion);
                                    ?>

                                </table>
                            </div>
                            <button type="submit" name="enviarPro" value="borrar" class="btn bg-danger-subtle fw-bolder fs-5 my-2">Borrar</button>

                        </form>

                    </div>
                    <div class="container border border-dark border-2 rounded-4 mt-4 p-4 bg-white">
                        <p class="h4">Añadir productos</p>
                        <form action="#" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-between gap-4">

                            <span>Nombre:<span style='color:red;'>*</span></span>
                            <input type="text" class="form-control " name="nombre" placeholder="Nombre (max20)">

                            <span>Descripcion: <span style='color:red;'>*</span> </span>
                            <input type="text" class="form-control " name="descripcion" placeholder="Descripcion (max 200)">

                            <span>Categorias:</span>
                            <select name="categoria" class="form-control ">
                                <option value="negocio">Negocio</option>
                                <option value="blog">Blog</option>
                                <option value="restaurante">Restaurante</option>
                                <option value="personal">Personal</option>
                            </select>

                            <span>Estilo:</span>
                            <select name="estilo" class="form-control ">
                                <option value="moderno">Moderno</option>
                                <option value="alegre">Alegre</option>
                                <option value="colorido">Colorido</option>
                                <option value="simple">Simple</option>
                            </select>

                            <span>Subir Imagen:</span>
                            <input type="file" name="imagen" class="form-control">
                            <span>O escribe la url:<span style='color:red;'>*</span></span>
                            <input type="text" class="form-control " name="urlImagen" placeholder="url de Imagen">

                            <span>Archivo:<span style='color:red;'>*</span></span>
                            <input type="text" class="form-control " name="urlArchivo" placeholder="url de platillas">

                            <?php
                            //comprobar que enviar fue pulsado y esos campos no esten vacios
                            if (
                                isset($_REQUEST['enviar'])
                                && !empty(trim($_REQUEST['nombre']))
                                && !empty(trim($_REQUEST['descripcion']))
                                && !empty(trim($_REQUEST['urlImagen']))
                                && !empty(trim($_REQUEST['urlArchivo']))
                            ) {
                                guardarProducto($conexion);
                            } else {
                                if (isset($_REQUEST['enviar'])) {
                                    echo "<p style='color:red;'>**Rellene los campos vacios** </p>";
                                }
                            }
                            ?>

                            <button type="submit" name="enviar" value="producto" class="btn bg-dark fw-bolder fs-5 my-2 text-light">Subir producto</button>

                        </form>
                    </div>
                </div>
            </div>
            <!--//Tab contenido -->
        </div>
    </div>
    <!--//body-->

    <footer class="container-fluid bg-black mb-0">
        <div class="container text-light">
            <div class="row p-4">
                <!--cambio de idioma-->
                <div class="col-12 col-lg">

                    <div class="d-flex flex-column justify-content-center">
                        <form action="../php/cambioColor.php" method="post" name="formColor">
                            <select name="color" id="color" class="btn btn-dark text-white mb-4" onchange="envioColor()">
                                <option value="" selected disabled>Contraste</option>
                                <option value="blanco">Normal</option>
                                <option value="negro">Oscuro</option>
                            </select>
                        </form>

                        <div class="d-flex flex-column justify-content-center ">
                            <?php


                            if (isset($_SESSION["autenticado"]) != true) {
                            ?>
                                <!--Inicio de sesion-->
                                <button class="btn btn-outline-light text-white my-2 fs-5 fw-medium h-50"><a href="inicioSesion.php" class="nav-link ">Inicio Sesión</a></button>
                                <button class="btn btn-light fw-bolder fs-5 my-2 h-50"><a href="inicioSesion.php" class="nav-link ">Comenzar</a></button>
                                <!--//Inicio de sesion-->
                            <?php
                            } else {
                            ?>
                                <i class="fa-solid fa-user ico"></i>
                                <p>Hola, <?php echo mostrarNombre($conexion) ?>
                                    <a href="../php/logOut.php" class="nav-link text-info">Cerrar sesión</a>
                                </p>
                            <?php
                            }
                            ?>

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

                        <!--solo para administrador-->

                        <?php

                        if (isset($_SESSION["autenticado"]) == true)
                            if (esAdmin($conexion)) {
                        ?>
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
                        <?php
                            }
                        ?>
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
    function envioColor() {
        document.formColor.submit()
    }
    document.getElementById("defaultOpen").click();
</script>

</html>