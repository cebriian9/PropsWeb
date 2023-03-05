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

function mostrarDatos($conexion)
{

    $sql = "SELECT * FROM usuarios WHERE usuario='$_SESSION[usuario]'";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();

    return $row;
}



function mostrarAdmin($conexion,$id)
{
    $admin=false;

    

    $sql = "SELECT id_user FROM admins WHERE id_user='$id'";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();

    if ($row!=null) {
        $admin=true;
    }

    return $admin;
}

function mostrarAllDatos($conexion)
{

    $sql = "SELECT * FROM usuarios";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();

    while ($row != null) {
        echo "<tr>";
        echo "<td>$row->id_user </td>";
        echo "<td>$row->usuario </td>";

        if (isset($row->nombre))
        echo "<td>$row->nombre </td>";

        if (isset($row->apellidos))
        echo "<td>$row->apellidos </td>";

        if (mostrarAdmin($conexion,$row->id_user)) {
            $admin="X";
        }else {
            $admin="";
        }
        echo"<td>$admin</td>";

        echo "<td > <input type='checkbox' name='marcados[]' value='$row->id_user'> </td>";


        
        //bajo de linea
        $row = $resultado->fetch_object();
    }
}
?>