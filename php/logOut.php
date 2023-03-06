<?php

    // inicio la sesión
    session_start();

    //no hace falta creo
    $_SESSION["autenticado"] = false;
    
    session_destroy();
    session_unset();

    //cookie

    setcookie('PHPSESSID','',time()-60);


header("Location:../paginas/index.php");
