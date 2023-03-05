<?php








function guardarFoto(){
    if (!empty($_FILES['imagen']['name'])) {
        //comprobamos que la imagen se ha subido
        if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {

            //comptobamos tipo 
            $tipo = mime_content_type($_FILES['imagen']['tmp_name']);
            if (strstr($tipo, "image")) {

                //nombre unico con time()

                $nombre = time() . $_FILES['imagen']['name'];
                //lo movemos
                if (move_uploaded_file($_FILES['imagen']['tmp_name'], "img/".$nombre)) {
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
    } else {
        echo "debes subir una imagen";
    }
}
?>