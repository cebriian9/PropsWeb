<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropWebs</title>
    <!--favicon-->
    <link rel="icon" type="image/jpg" href="../multimedia/imagenes/decoros/logo.png" />


    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/349b369734.js" crossorigin="anonymous"></script>

    <!--BS5-->

    <?php
    if (strcmp($_REQUEST['color'], "blanco")) {
    ?>
        <link rel="stylesheet" href="../estilos/styles.css">
    <?php
    } else {
    ?>
        <link rel="stylesheet" href="../estilos/styles.css">
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

        <!--cabecera(foto)-->

        <div class=" container-fluid bg-cabecera d-flex flex-column justify-content-center">
            <div class="container ">
                <div class="row ">
                    <div class="col col-md-6 bg-light rounded-4 p-3  text-black text-break">
                        <p class="h3">Diseños Web</p>
                        ¿Estás buscando una manera rápida y fácil de crear una página web increíble? ¡Tenemos la
                        solución
                        perfecta para ti! En nuestra tienda web, ofrecemos una amplia selección de plantillas de diseño
                        de
                        páginas web, desde diseños elegantes hasta modernos y vibrantes.


                    </div>
                </div>
            </div>
        </div>
        <!--//cabecera(foto)-->
    </header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
        <path fill="#826541" fill-opacity="1" d="M0,64L120,85.3C240,107,480,149,720,165.3C960,181,1200,171,1320,165.3L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>
    <!--//encabezado-->

    <!--body-->
    <div class="container">

        <!--Contenido inicial-->
        <div class=" bg-light p-5 rounded-5 my-4">
            <!--titulo-->
            <p class="h1 titulo my-4 text-center">¡Da el paso al mundo web!</p>
            <!--//titulo-->


            <div class="row mt-5">
                <div class="col d-flex align-items-center  order-2 order-lg-0">
                    <picture>
                        <img src="../multimedia/imagenes/decoros/foto-prmocional.jpg" class="img-fluid rounded-4" alt="Lo sentimos, no esta disponible la imagen">
                    </picture>
                </div>
                <div class="col-12 col-lg">
                    <div class="row">
                        <p class="fs-2"><span class="h1">1·</span> Elige el diseño que mas te guste</p>
                        <p class="fs-5">Puedes elegir cualquier diseño de todos los que disponemos buscando en todas
                            nuestras categorias</p>
                    </div>
                    <hr>
                    <div class="row">
                        <p class="fs-2"><span class="h1">1·</span> Elige el diseño que mas te guste</p>
                        <p class="fs-5">Puedes elegir cualquier diseño de todos los que disponemos buscando en todas
                            nuestras categorias</p>
                    </div>
                    <hr>
                    <div class="row">
                        <p class="fs-2"><span class="h1">1·</span> Elige el diseño que mas te guste</p>
                        <p class="fs-5">Puedes elegir cualquier diseño de todos los que disponemos buscando en todas
                            nuestras categorias</p>
                    </div>
                </div>
            </div>

        </div>
        <!--//Contenido inicial-->



        <div class="container bg-light p-5 rounded-5 my-4 text-center">
            <!--titulo-->
            <p class="h1  titulo mb-0 my-4 ">Empieza a buscar</p>
            <p class="h3 ">Top descargas</p>
            <!--//titulo-->
            <!--cartas-->
            <div class="container my-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col-12 col-xl">
                        <div class="card">
                            <img src="https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/webwing.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                            <div class="card-body">
                                <h5 class="card-title">Web Profesional</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>

                                <button class="btn btn-outline-dark">Descargar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl">
                        <div class="card">
                            <img src="https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/solar.jpeg" class="card-img-top" alt="Palm Springs Road" />
                            <div class="card-body">
                                <h5 class="card-title">Web Negocio</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <button class="btn btn-outline-dark">Descargar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page279/tropiko.jpeg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                            <div class="card-body">
                                <h5 class="card-title">Web Restaurante</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional content.
                                </p>
                                <button class="btn btn-outline-dark">Descargar</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--//cartas-->
            <a href="catalogo.php" class="btn btn-dark w-50"><span class="fs-4">Buscar mas...</span></a>
        </div>


    </div>
    <!--//body-->

    <footer class="container-fluid bg-black mb-0">
        <div class="container text-light">
            <div class="row p-4">
                <!--cambio de idioma-->
                <div class="col-12 col-lg">

                    <div class="d-flex flex-column justify-content-center">
                        <p class="fs-4">Color:</p>
                        <form action="../php/cambioColor.php" method="post" name="color">
                            <select name="idioma" id="color" class="btn btn-dark text-white mb-4" onchange="envioColor()">
                                <option value="normal">Normal</option>
                                <option value="daltonico">Daltonico</option>
                            </select>
                        </form>

                        <div class="d-flex flex-column justify-content-center ">
                            <?php


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