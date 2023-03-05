<?php

@$conexion = new mysqli('localhost', 'props', 'props', 'propsweb');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}

function guardarProducto($conexion)
{
    $nombre = trim($_REQUEST['nombre']);
    $sql = "SELECT nombre FROM productos WHERE nombre='$nombre'";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();

    //si no existe el usuario lo registro y lo envio al inicio, sino de vuelta a empezar 
    if ($row->nombre != $nombre) {
        
        $descripcion = $_REQUEST['descripcion'];
        $categoria = $_REQUEST['categoria'];
        $estilo = $_REQUEST['estilo'];

        //guardarFoto();

        $urlImg = $_REQUEST['urlImagen'];
        $urlFile = $_REQUEST['urlArchivo'];

        //--------------------------------------------------------------------------------cambiar null por foto-----
        $sql = "INSERT INTO productos  VALUES(null,'$categoria','$estilo','$nombre','$descripcion','foto','$urlImg','$urlFile')";

        $conexion->query($sql);
    }else {
        echo "<p style='color:red;'>**Ese producto ya existe, compruebe el nombre** </p>";
    }
}


function guardarFoto()
{

    //comprobamos que la imagen se ha subido
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {

        //comptobamos tipo 
        $tipo = mime_content_type($_FILES['imagen']['tmp_name']);
        if (strstr($tipo, "image")) {

            //nombre unico con time()

            $nombre = time() . $_FILES['imagen']['name'];
            //lo movemos
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], "img/" . $nombre)) {
                //se movio
                // y se mostra

                echo "<img src='img/$nombre' alt='foto subida por usuario' width='100px' height='100px'>";
            } else {
                echo "no se pudo guardar";
            }
        } else {
            //no es una imagen
            echo "el fichero debe de ser una imagen";
        }
    } else {
        echo 'error al subir el archivo';
    }
}


if (isset($_REQUEST['enviarPro'])){

    if (isset($_REQUEST['marcaPro'])) {
        $idProductos = $_REQUEST['marcaPro'];
        $idProductos = implode(",", $idProductos);

        $sql = "DELETE FROM productos WHERE id_producto IN ($idProductos)";
        
        $conexion->query($sql);
 
    }

}