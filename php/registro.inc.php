<?php
//conexion
@$conexion = new mysqli('localhost', 'props', 'props', 'propsweb');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}


if (isset($_REQUEST['enviar'])) {

    //compruebo si el boton pulsado es el de registrarse o el de iniciarse
    if (!strcmp($_REQUEST['enviar'], "registro")) {

        //consulto el nombre del usuario para que no haya 2 personas con el mismo usuario
        $usuario = trim($_REQUEST['usuario']);
        $sql = "SELECT usuario FROM usuarios WHERE usuario='$usuario'";

        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_object();

        //si no existe el usuario lo registro y lo envio al inicio, sino de vuelta a empezar 
        if ($row->usuario != $usuario) {
            $pass = hash('sha256', trim($_REQUEST['pass']));

            $nombre = trim($_REQUEST['nombre']);
            $apellidos = trim($_REQUEST['apellidos']);

            $sql = "INSERT INTO usuarios  VALUES(null,'$usuario','$pass','$nombre','$apellidos')";

            $conexion->query($sql);

            echo " Registrado correctamente";
            header("Location:index.php");
        } else {
            echo "El usuario ya existe";
        }
    } else {
        //boton de inicio de sesion
        $usuario = trim($_REQUEST['usuarioI']);
        $pass = hash('sha256', trim($_REQUEST['passI']));
        $sql = "SELECT usuario FROM usuarios WHERE usuario='$usuario' AND contraseña='$pass'";

        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_object();

        //si no existe el usuario lo mando a registro, sino de vuelta a empezar 
        if ($row->usuario == $usuario) {
            echo "Iniciado correcto";

            if (!isset($_SESSION)) {
                // inicio la sesión
                session_start();
            }


            //le ponemos que esta identificado
            $_SESSION["autenticado"] = true;

            header("Location:index.php");

        } else {
            echo "Las credenciales no son correctas, prueba a registrarte\n";
        }
    }
}
