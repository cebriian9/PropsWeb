<?php
//conexion
@$conexion = new mysqli('localhost', 'props', 'props', 'propsweb');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}


//si pulsa enviar
if (isset($_REQUEST['enviar']))
//comprobamos que boton pulso, para borrar el usuario o hacerlo admin
if (!strcmp($_REQUEST['enviar'], "borrar")){

    
    if (isset($_REQUEST['marcados'])) {
        $idUsuarios = $_REQUEST['marcados'];
        $idUsuarios = implode(",", $idUsuarios);

        $sql = "DELETE FROM usuarios WHERE id_user IN ($idUsuarios)";
        echo 'borrado';
        $conexion->query($sql);
 
    }

    //hacer admin
}else if (!strcmp($_REQUEST['enviar'], "admin")){
    if (isset($_REQUEST['marcados'])) {
        $idUsuarios = $_REQUEST['marcados'];
        $idUsuarios = "(" . implode("), (", $idUsuarios) . ")";

        $sql = "INSERT INTO admins  VALUES $idUsuarios ";
        echo 'admin';
        $conexion->query($sql);

        
    }
    
    //quitar de admin
}else {
    if (isset($_REQUEST['marcados'])) {
        $idUsuarios = $_REQUEST['marcados'];
        $idUsuarios = implode(",", $idUsuarios);

        $sql = "DELETE FROM admins WHERE id_user IN ($idUsuarios)";
        echo 'no admin';
        $conexion->query($sql);

        
    }
}
header("Location:../paginas/usuario.php");
?>