<?php

@$conexion = new mysqli('localhost', 'props', 'props', 'propsweb');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}

function mostrarNombre($conexion)
{

    $sql = "SELECT nombre FROM usuarios WHERE usuario='$_SESSION[usuario]'";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();

    return $row->nombre;
}

function getId($conexion)
{

    $sql = "SELECT id_user FROM usuarios WHERE usuario='$_SESSION[usuario]'";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();

    return $row->id_user;
}

function esAdmin($conexion)
{
    $admin=false;

    $id=getId($conexion);

    $sql = "SELECT id_user FROM admins WHERE id_user='$id'";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();

    if ($row!=null) {
        $admin=true;
    }

    return $admin;
}

