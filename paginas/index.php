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

    <link rel="stylesheet" href="../estilos/styles.css">
    <script src="../bs5/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!--mi JS-->
    <script src="../scripts/cambios.js"></script>

    <!--Copiar mucho-->
    <!--
        https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantilla-web-gratuita-tropiko/
    -->

</head>
<?php
$color = '';
if (isset($_COOKIE['color']))
    if (!strcmp($_COOKIE['color'], 'negro')) {
        $color = 'fondo';
    }
?>

<body class="<?php echo $color; ?> ">

    <?php
    if (!isset($_SESSION)) {
        // inicio la sesión
        session_start();
    }
    include "../php/pijadas.inc.php"
    ?>

    <!--encabezado-->
    <header class="container-fluid  bg-primary  text-white bg-encabezado ">
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
                        <a href="../php/logOut.php" class="nav-link text-dark fw-semibold text-decoration-underline">Cerrar sesión</a>
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
                        solución perfecta para ti! En nuestra pagina web, ofrecemos una amplia selección de plantillas de
                        web, desde diseños elegantes hasta modernos y vibrantes.
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
    <div class="container ">

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
                        <p class="fs-5">Échale un vistazo a nuestras plantillas web,
                            seguro que encuentras algo que se adapte a tu estilo y necesidades.
                        </p>
                    </div>
                    <hr>
                    <div class="row">
                        <p class="fs-2"><span class="h1">2·</span> Descarga una plantilla</p>
                        <p class="fs-5">¡No pierdas el tiempo! Descarga la plantilla que más te guste
                            y empieza a trabajar en tu sitio web de inmediato.
                        </p>
                    </div>
                    <hr>
                    <div class="row">
                        <p class="fs-2"><span class="h1">3·</span> Personaliza tu plantilla</p>
                        <p class="fs-5"> Ahora viene la parte divertida, personaliza la plantilla
                            a tu manera. Cambia los colores, el texto, agrega imágenes, todo lo que
                            quieras para que tu sitio web sea único y represente tu marca o negocio.
                        </p>
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
                                    Esta plantilla de diseño de sitios web tiene un diseño moderno
                                    y elegante, con grandes imágenes en la página de inicio que te
                                    ayudarán a llamar la atención de tus visitantes
                                </p>

                                <button class="btn btn-outline-dark"><a href="catalogo.php" class="nav-link">Descargar</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl">
                        <div class="card">
                            <img src="https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/solar.jpeg" class="card-img-top" alt="Palm Springs Road" />
                            <div class="card-body">
                                <h5 class="card-title">Web Negocio</h5>
                                <p class="card-text">
                                    Destaca tus productos y servicios en línea con nuestra plantilla de
                                    diseño empresarial, que presenta un diseño claro y una navegación fácil de usar
                                </p>
                                <button class="btn btn-outline-dark"><a href="catalogo.php" class="nav-link">Descargar</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page279/tropiko.jpeg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                            <div class="card-body">
                                <h5 class="card-title">Web Restaurante</h5>
                                <p class="card-text">
                                    Diseña el sitio web perfecto para tu restaurante con nuestro
                                    diseño web especializado, que destaca tu deliciosa comida con
                                    imágenes de alta calidad y un diseño moderno
                                </p>
                                <button class="btn btn-outline-dark"><a href="catalogo.php" class="nav-link">Descargar</a></button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--//cartas-->
            <a href="catalogo.php" class="btn btn-dark w-50"><span class="fs-4">Buscar más...</span></a>
        </div>


    </div>
    <!--//body-->

    <footer class="container-fluid bg-black mb-0">
        <div class="container text-light">
            <div class="row p-4 gap-3">
                <!--cambio de idioma-->
                <div class="col-12 col-lg">

                    <div class="d-flex justify-content-center">
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
                                    <i class="fa-solid fa-user fs-3"></i>
                                    <p>Hola, <?php echo mostrarNombre($conexion) ?>
                                        <a href="../php/logOut.php" class="nav-link text-info">Cerrar sesión</a>
                                    </p>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>

                <!--cuenta y cosas-->
                <div class="col-12 col-lg text-center mt-5">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="text-light fs-4" href="catalogo.php">Diseños</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light fs-4" href="usuario.php">Cuenta</a>
                        </li>

                        <!--solo para administrador-->


                        <?php

                        if (isset($_SESSION["autenticado"]) == true)
                            if (esAdmin($conexion)) {
                        ?>
                            <hr>
                            <p class="mb-0">Administrador:</p>

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

                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="https://formspree.io/f/xgebvpyq" method="POST" class="w-75">

                        <div class="text-center fs-3 fw-bold">Contacto</div>
                        <div class="input-group mt-4">
                            <div class="input-group-text ">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <!--usuario-->
                            <input class="form-control " name="Nombre" type="text" placeholder="Nombre" />
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-text">
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <!--asunto-->
                            <input class="form-control " name="asunto" type="password" placeholder="Asunto" />


                        </div>

                        <div class="input-group mt-1">
                            <!--mensaje-->
                            <textarea name="Texto" id="text" cols="20" rows="3" placeholder="Mensaje..." class="form-control"></textarea>
                        </div>
                        <!--submit-->
                        <button type="submit" name="enviar" value="inicio" class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm">
                            Enviar
                        </button>


                    </form>
                </div>
            </div>
        </div>

    </footer>
</body>
<script>
    function envioColor() {
        document.formColor.submit()

    }
</script>

</html>