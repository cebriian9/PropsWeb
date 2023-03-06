<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <!--favicon-->
    <link rel="icon" type="image/jpg" href="../multimedia/imagenes/decoros/logo.png" />


    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/349b369734.js" crossorigin="anonymous"></script>

    <!--BS5-->
    <?php
    if (!strcmp($_COOKIE['color'], "blanco")) {
    ?>
        <link rel="stylesheet" href="../estilos/styles.css">
    <?php
    } else {
    ?>
        <link rel="stylesheet" href="../estilos/stylesDark.css">
    <?php
    }
    ?>
    <script src="../bs5/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!--mi JS-->
    <script src="../scripts/cambios.js"></script>

    <!--Copiar mucho-->
    <!--
        https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantilla-web-gratuita-tropiko/
    -->

</head>

<body>
    <?php
    if (!isset($_SESSION)) {
        // inicio la sesión
        session_start();
    }
    include "../php/pijadas.inc.php"
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
                    <button class="btn  text-white my-2 fs-5 fw-medium "><a href="inicioSesion.php" class="nav-link ">Inicio Sesion</a></button>
                    <button class="btn btn-dark fw-bolder fs-5 my-2 "><a href="inicioSesion.php" class="nav-link ">Comenzar</a></button>
                    <!--//Inicio de sesion-->

                <?php
                } else {
                ?>
                    <i class="fa-solid fa-user ico"></i>
                    <p>Hola, <?php echo mostrarNombre($conexion) ?>
                        <a href="../php/logOut.php" class="nav-link text-info">Cerrar sesion</a>
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
    <div class="container ">
        <div class="d-flex justify-content-center my-5">
            <p class="h2 titulo">Todas las platillas a tu disposicion</p>
        </div>
        <div class="row  gap-4">
            <!--filtros-->
            <div class="col-12 col-xl-2 ">
                <div class="row gap-3">
                    <!--buscador-->
                    <span>Nombre:</span>
                    <form action="#" method="post" autocomplete="on">

                        <div class="d-flex justify-content-between mb-3">
                            <input class="form-control " type="search" list="buscador" name="nombre" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-dark rounded-4 mx-2" type="submit" name="filtro"><i class="fa-solid fa-magnifying-glass "></i></button><!--submit-->
                        </div>


                        <!--//buscador-->
                        <div class="accordion accordion-flush shadow">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCategoria"><!--cambio de id para desplegable-->
                                        <!--Nombre filtro-->
                                        Categorias
                                    </button>
                                </h2>
                                <!--cambio de id para desplegable-->
                                <div id="flush-collapseCategoria" class="accordion-collapse collapse">
                                    <div class="accordion-body">

                                        <input type="checkbox" name="categoria[]" value="negocio" class="form-check-input"> Negocio <br>
                                        <input type="checkbox" name="categoria[]" value="blog" class="form-check-input"> Blog <br>
                                        <input type="checkbox" name="categoria[]" value="restaurante" class="form-check-input"> Restaurante <br>
                                        <input type="checkbox" name="categoria[]" value="personal" class="form-check-input"> Personal <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion accordion-flush shadow">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEstilo"><!--cambio de id para desplegable-->
                                        <!--Nombre filtro-->
                                        Estilo
                                    </button>
                                </h2>
                                <!--cambio de id para desplegable-->
                                <div id="flush-collapseEstilo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <!--PHP poner las cate como en el examen-->
                                        <input type="checkbox" name="estilo[]" value="moderno" class="form-check-input"> Moderno <br>
                                        <input type="checkbox" name="estilo[]" value="alegre" class="form-check-input"> Alegre <br>
                                        <input type="checkbox" name="estilo[]" value="Colorido" class="form-check-input"> Colorido <br>
                                        <input type="checkbox" name="estilo[]" value="simple" class="form-check-input"> Minimalista <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div>
                        <!--????-->
                    </div>
                </div>
            </div>

            <!--Contenido-->
            <div class="col">
                <div>
                    <div class="row">
                        <?php
                        //compruebo que filtro se pulso
                        if (isset($_REQUEST['filtro'])) {


                            //compruebo que se pulso una categoria
                            if (isset($_REQUEST['categoria'])) {
                                $categorias = $_REQUEST['categoria'];
                                $categorias = "'" . implode("', '", $categorias) . "'";
                                $categorias = substr($categorias, 1, strlen($categorias) - 2);
                            } else {
                                //sino categoria vacio
                                $categorias = '';
                            }

                            //compruebo que se pulso un estilo
                            if (isset($_REQUEST['estilo'])) {
                                $estilo = $_REQUEST['estilo'];
                                $estilo = "'" . implode("', '", $estilo) . "'";
                                $estilo = substr($estilo, 1, strlen($estilo) - 2);
                            } else {
                                //sino estilo vacio
                                $estilo = '';
                            }

                            //igual con nombre
                            if (isset($_REQUEST['nombre'])) {
                                $nombre = trim($_REQUEST['nombre']);
                            } else {
                                $nombre = '';
                            }

                            // y si todo esta vacio mostramos todo
                            if ($categorias == null && $estilo == null && $nombre == null) {
                                $sql = "SELECT * FROM productos ";
                            } else {
                                $sql = "SELECT * FROM productos WHERE categoria IN ('$categorias') OR estilo IN ('$estilo') OR nombre = '$nombre'";
                            }
                        } else {
                            $sql = "SELECT * FROM productos ";
                        }


                        $resultado = $conexion->query($sql);
                        $row = $resultado->fetch_object();

                        //mostramos productos
                        while ($row != null) {
                        ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card mb-5">
                                    <img src="<?php echo $row->urlimagen ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row->nombre ?></h5>
                                        <span><?php echo $row->categoria ?>, <?php echo $row->estilo ?></span>
                                        <p class="card-text"><?php echo $row->descripcion ?></p>
                                        <a href="<?php echo $row->urlarchivo ?>" class="btn btn-dark">Descargar</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                            //bajo de linea
                            $row = $resultado->fetch_object();
                        }
                        ?>
                    </div>
                </div>
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
                            <?php


                            //si esta autenticado mostramos su nombre
                            if (isset($_SESSION["autenticado"]) != true) {
                            ?>
                                <!--Inicio de sesion-->
                                <button class="btn btn-outline-light text-white my-2 fs-5 fw-medium h-50"><a href="inicioSesion.php" class="nav-link ">Inicio Sesion</a></button>
                                <button class="btn btn-light fw-bolder fs-5 my-2 h-50"><a href="inicioSesion.php" class="nav-link ">Comenzar</a></button>
                                <!--//Inicio de sesion-->
                            <?php
                            } else {
                            ?>
                                <i class="fa-solid fa-user ico"></i>
                                <p>Hola, <?php echo mostrarNombre($conexion) ?>
                                    <a href="../php/logOut.php" class="nav-link text-info">Cerrar sesion</a>
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
                        <li class="nav-item">
                            <a class="text-light " href="#">Contacto</a>
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

</html>