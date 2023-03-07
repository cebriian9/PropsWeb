<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}


//conexion
@$conexion = new mysqli('localhost', 'props', 'props', 'propsweb');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}

$busqueda = $_REQUEST['param'];
$busqueda = strtolower($busqueda);

$sql = "SELECT nombre FROM productos WHERE nombre LIKE '%$busqueda%'";

$resultado = $conexion->query($sql);
$row = $resultado->fetch_object();

while ($row == null) {
    echo "<option value='$row->nombre'></option>";
    $row = $resultado->fetch_object();
}

echo "hola";
