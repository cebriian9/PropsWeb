
document.addEventListener("DOMContentLoaded", function () {
    //nodos-registro-----------------------\
    
    let inpUsuario = document.getElementById('usuario')
    let inpPass = document.getElementById('pass')
    let inpPass2 = document.getElementById('pass2')
    let inpNombre = document.getElementById('nombre')
    let inpApellidos = document.getElementById('apellidos')
    let submit = document.getElementById('submit')

    //nodos-registro------------------------/


    //-validar usuario----------
    inpUsuario.addEventListener('keyup', function () {
        
        validarUsuario()
        validacionFinal()
    })

    function validarUsuario() {
        let usuario = document.getElementById('usuario').value
        let exp = /^[a-zA-Z0-9_-]{3,16}$/

        let valido = exp.test(usuario)  
        
        if (valido == false) {
            document.getElementById('errUs').innerHTML = "error en el nombre de usuario , tamaño [3-20]"
        }
        else {
            document.getElementById('errUs').innerHTML = " "
        }

        return valido
    }

    //-validar contraseñas---------
    inpPass.addEventListener('keyup', function () {
        validarContraseña()
        validacionFinal()
    })

    function validarContraseña() {
        let pass = document.getElementById('pass').value
        let exp = /^(?=.[A-Z])(?=.\d){8,}$/


        let valido = exp.test(pass)
        if (valido == false) {
            document.getElementById('errPass').innerHTML = "Contraseña poco fuerte "
        } else {
            document.getElementById('errPass').innerHTML = " "
        }

        return valido
    }

    //-validar contraseñas---------
    inpPass2.addEventListener('keyup', function () {
        validarContraseña2()
        validacionFinal()
    })

    function validarContraseña2() {
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
    }

    //-validar nombre---------
    inpNombre.addEventListener('keyup', function () {
        validarNombre()
        validacionFinal()
    })
    function validarNombre() {
        let nombre = document.getElementById('nombre').value
        let exp = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]{3,20}$/

        let valido = exp.test(nombre)
        if (valido == false) {
            document.getElementById('errNombre').innerHTML = "Nombre no correcto"
        } else {
            document.getElementById('errNombre').innerHTML = " "
        }
        return valido
    }

    //-validar apellido---------
    inpApellidos.addEventListener('keyup', function () {
        validarApellidos()
        validacionFinal()
    })

    function validarApellidos() {
        let apellido = document.getElementById('apellidos').value
        let exp = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]{3,20}$/

        let valido = exp.test(apellido)
        if (valido == false) {
            document.getElementById('errApellido').innerHTML = "Apellido no correcto "
        } else {
            document.getElementById('errApellido').innerHTML = " "
        }
        return valido
    }



    //-habilito o no el boton de envio
    function validacionFinal() {
        if (validarUsuario() && validarContraseña() && validarContraseña2() && validarNombre() && validarApellidos()) {
            submit.classList.replace("disabled", "ds");
        } else {
            submit.classList.replace("ds", "disabled")
        }
    }
})
