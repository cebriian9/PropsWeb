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

<body>
    <!--encabezado-->
    <header class="container-fluid  bg-primary  text-white bg-encabezado">
        <div class="row py-4">
            <!--Titulo-->
            <div class="col d-flex flex-column justify-content-center mt-2">
                <p class="h1 titulo text-center">
                    <a href="index.html" class="nav-link">Props Web</a>
                </p>
            </div>
            <!--//Titulo-->

            <div class=" col-12 col-sm d-flex justify-content-center order-3 order-sm-0  ">
                <!--Menu desplegable-->
                <nav class="navbar navbar-expand-lg navbar-light d-flex flex-column justify-content-center">

                    <button onclick="xAnimation()" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="h3 text-light" id="tongleNav"><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div>
                        <!--Desplegable-->
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav d-flex  align-items-center ">
                                <li class="nav-item">
                                    <a class="nav-link text-light fs-5 fw-medium" href="catalogo.html">Diseños</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light fs-5 fw-medium" href="usuario.html">Cuenta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light fs-5 fw-medium" href="#">Contacto</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>
                <!--//Menu desplegable-->

            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center flex-lg-row ">
                <!--Inicio de sesion-->
                <button class="btn  text-white my-2 fs-5 fw-medium "><a href="inicioSesion.html"
                        class="nav-link ">Inicio Sesion</a></button>
                <button class="btn btn-dark fw-bolder fs-5 my-2 "><a href="inicioSesion.html"
                        class="nav-link ">Comenzar</a></button>
                <!--//Inicio de sesion-->
            </div>
        </div>

        <!--//encabezado-->
    </header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210">
        <path fill="#826541" fill-opacity="1"
            d="M0,64L120,85.3C240,107,480,149,720,165.3C960,181,1200,171,1320,165.3L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
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
                    <button class="tabLinks btn btn-outline-dark fs-5" onclick="openTabs(event, 'Datos')"
                        id="defaultOpen">Datos</button>
                    <button class="tabLinks btn btn-outline-dark fs-5"
                        onclick="openTabs(event, 'usuarios')">usuarios(solo admins)</button>
                    <button class="tabLinks btn btn-outline-dark fs-5"
                        onclick="openTabs(event, 'productos')">productos(solo admins)</button>
                </div>
                <!-- //Tab links -->
                <script>

                </script>
            </div>
            <!--Tab contenido-->
            <div class="col fs-5">

                <div id="Datos" class="tabContent">

                    <div class="container border border-dark border-2 rounded-4 p-4">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-user ico"></i>
                        </div>
                        <h3>Datos de usuario</h3><br>
                        <p>Usuario: <span></span></p>
                        <p>Correo: <span></span></p>
                        <br>
                        <p>Nombre: <span></span></p>
                        <p>Apellidos: <span></span></p>
                        <p>Fecha de Nacimiento: <span></span></p>

                    </div>
                </div>

                <div id="usuarios" class="tabContent">
                    <div class="container border border-dark border-2 rounded-4 p-4">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-user ico"></i>
                        </div>
                        <h3>Todos los usuarios:</h3><br>

                        <table class="table table">
                            <tr class="table-primary">
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Fecha User</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Fecha Nac</th>
                            </tr>

                            <!--php inserte motrar BD-->


                        </table>

                    </div>
                </div>

                <div id="productos" class="tabContent">
                    <div class="container border border-dark border-2 rounded-4 p-4">
                        <div class="d-flex justify-content-center">
                            <i class="fa-solid fa-cart-shopping ico"></i>
                        </div>
                        <h3>Todos los usuarios:</h3><br>

                        <table class="table">
                            <tr class="table-primary">
                                <th>ID</th>
                                <th>nombre</th>
                                <th>Categoria</th>
                                <th>Estilo</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                            </tr>

                            <!--php inserte motrar BD-->


                        </table>
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
                        <p class="fs-4">Idioma:</p>
                        <select name="idioma" id="idioma" class="btn btn-dark text-white mb-4">
                            <option value="español">Español</option>
                            <option value="ingles">Ingles</option>
                        </select>

                        <div class="d-flex flex-column justify-content-center ">
                            <!--Inicio de sesion-->
                            <button class="btn btn-outline-light text-white my-2 fs-5 fw-medium h-50"><a
                                    href="inicioSesion.html" class="nav-link ">Inicio Sesion</a></button>
                            <button class="btn btn-light fw-bolder fs-5 my-2 h-50"><a href="inicioSesion.html"
                                    class="nav-link ">Comenzar</a></button>
                            <!--//Inicio de sesion-->
                        </div>
                    </div>
                </div>

                <!--cuenta y cosas-->
                <div class="col-12 col-lg">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="text-light " href="catalogo.html">Diseños</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light " href="usuario.html">Cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light " href="#">Contacto</a>
                        </li>


                        <!--solo para administrador-->

                        <hr>
                        <p class="mb-0">Administrador:</p>
                        <hr class="w-25 my-0">
                        <li class="nav-item">
                            <a class="text-light " href="usuario.html">Vista de usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light " href="usuario.html">Vista de productos</a>
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