<?php


if (isset($_REQUEST['enviar'])) {

    if (strcmp($_REQUEST['enviar'], "registro")) {
        
        //registramos al usuario
        $usuario = $_REQUEST['usuario'];
        $pass = $_REQUEST['pass'];
    
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
    
        echo 'buen registro';
    } else {
        echo'buen inicio';
    }
}
