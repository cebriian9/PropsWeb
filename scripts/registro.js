document.addEventListener("DOMContentLoaded", function () {
    //nodos-registro-----------------------\

    let inpUsuario = document.getElementById('usuario')
    let inpPass = document.getElementById('pass')
    let inpPass2 = document.getElementById('pass2')
    let inpNombre = document.getElementById('nombre')
    let inpApellidos = document.getElementById('apellidos')





    //nodos-registro------------------------/


    //-validar usuario----------
    inpUsuario.addEventListener('change', function () {
        let usuario = document.getElementById('usuario').value
        let exp = /^[a-z0-9_-]{3,16}$/

        let valido = exp.test(usuario)

        if (valido == false) {
            document.getElementById('errUs').innerHTML = "error en el nombre de usuario , tamaño [3-20]"
        }
        else {
            document.getElementById('errUs').innerHTML = " "
        }

        return valido
    })

    function validarUsuario() {
        
    }

    //-validar contraseñas---------

    inpPass.addEventListener('change', function () {
        let pass = document.getElementById('pass').value
        let exp = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/


        let valido = exp.test(pass)
        console.log(valido);
        if (valido == false) {
            document.getElementById('errPass').innerHTML = "Contraseña poco fuerte "
        } else {
            document.getElementById('errPass').innerHTML = " "
        }

        return valido
    })

    //-validar contraseñas---------
    inpPass2.addEventListener('change', function () {
        let pass = document.getElementById('pass').value
        let pass2 = document.getElementById('pass2').value
        let valido = false
        if (pass2 == pass) {
            valido = true
        }

        if (valido == false) {
            document.getElementById('errPass2').innerHTML = "Las contraseñas no coinciden "
        } else {
            document.getElementById('errPass2').innerHTML = " "
        }
        return valido
    })

    //-validar nombre---------
    inpNombre.addEventListener('change', function () {
        let nombre = document.getElementById('nombre').value
        let exp = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]{3,20}$/

        let valido = exp.test(nombre)
        if (valido == false) {
            document.getElementById('errNombre').innerHTML = "Nombre no correcto"
        } else {
            document.getElementById('errNombre').innerHTML = " "
        }
        return valido
    })



    //-validar apellido---------

    inpApellidos.addEventListener('change', function () {
        let apellido = document.getElementById('apellidos').value
        let exp = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]{3,20}$/

        let valido = exp.test(apellido)
        if (valido == false) {
            document.getElementById('errApellido').innerHTML = "Apellido no correcto "
        } else {
            document.getElementById('errApellido').innerHTML = " "
        }
        return valido
    })

})