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
        if (isset($row->usuario) != $usuario) {

            $Exp = "/^[a-zA-Z0-9_-]{3,16}$/";

            //valido que la expresion regular se cumple de nuevo 
            if (preg_match($Exp, $usuario)) {

                $Exp = "/^(?=.*[A-Z])(?=.*\d)(?=.*\W)[\S]{8,}/";

                //valido pass
                if (preg_match($Exp, trim($_REQUEST['pass']))) {
                    //si correcto
                    //ciframos pass
                    $pass = hash('sha256', trim($_REQUEST['pass']));

                    $Exp = "/^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]{3,20}$/";

                    //contraseñas coincidan
                    if (!strcmp($_REQUEST['pass'], $_REQUEST['pass2'])) {


                        //validamos nombre y apellido
                        if ((preg_match($Exp, trim($_REQUEST['nombre']))) && (preg_match($Exp, trim($_REQUEST['apellidos'])))) {
                            $nombre = trim($_REQUEST['nombre']);
                            $apellidos = trim($_REQUEST['apellidos']);




                            $sql = "INSERT INTO usuarios  VALUES(null,'$usuario','$pass','$nombre','$apellidos')";

                            $conexion->query($sql);

                            echo " Registrado correctamente";

                            if (!isset($_SESSION)) {
                                // inicio la sesión
                                session_start();
                            }

                            //le ponemos que esta identificado
                            $_SESSION["autenticado"] = true;
                            $_SESSION["usuario"] = $usuario;

                            header("Location:index.php");
                            //registrado
                        } else {
                            echo "Compruebe el nombre y apellido";
                        }

                    } else {
                        echo "Compruebe que las contraseñas sean iguales";
                    }

                } else {
                    echo "Compruebe la contraseña";
                }

            } else {
                echo "Compruebe el usuario";
            }

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
        if ($row != null) {
            echo "Iniciado correcto";

            if (!isset($_SESSION)) {
                // inicio la sesión
                session_start();
            }


            //le ponemos que esta identificado
            $_SESSION["autenticado"] = true;
            $_SESSION["usuario"] = $usuario;

            header("Location:index.php");
        } else {
            echo "Las credenciales no son correctas, prueba a registrarte\n";
        }
    }
}
