//ajax
document.addEventListener('DOMContentLoaded', function () {

    let buscador = document.getElementById('busq')
    let sugerencia=document.getElementById('sugerencia')
    
    buscador.addEventListener('keyup', function () {
        let str=buscador.value

        
        if (str.length == 0) {
            sugerencia.innerHTML = "";
            return;
        }
        else {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {
                    
                    sugerencia.innerHTML = this.responseText;
                }
            };

            xmlhttp.open("GET", "http://localhost/PropsWeb/php/buscador.php?param=" + str, true);
            xmlhttp.send();
        }


    })
})