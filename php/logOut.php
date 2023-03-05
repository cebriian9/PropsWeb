<?php

    // inicio la sesión
    session_start();

    //no hace falta creo
    $_SESSION["autenticado"] = false;
    session_destroy();



header("Location:../paginas/index.php");
