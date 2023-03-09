//ajax
//carga el dom
document.addEventListener('DOMContentLoaded', function () {

    //rescato el input buscador
    let buscador = document.getElementById('busq')

    //la datalist
    let sugerencia = document.getElementById('sugerencia')

    //cuando keyup
    buscador.addEventListener('keyup', function () {

        //rescato el valor del input
        let str = buscador.value

        //si es nada fuera
        if (str.length == 0) {
            sugerencia.innerHTML = "";
            return;

        //si tiene contenido lo envio al servidor a compararlo con todos los nombres
        } else {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    sugerencia.innerHTML = this.responseText;
                }
            };

            xmlhttp.open("GET", "http://10.10.30.174/raul/buscador.php?param=" + str, true);
            xmlhttp.send();
        }


    })
})