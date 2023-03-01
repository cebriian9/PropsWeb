//--Cambio de hamborgesa a X menu desplegable-----

let tongleNav = false
function perro() {
    if (tongleNav) {
        document.getElementById('tongleNav').innerHTML = '<i class="fa-solid fa-bars"></i>'
    } else {
        document.getElementById('tongleNav').innerHTML = '<i class="fa-solid fa-x"></i>'
    }

    tongleNav = !tongleNav
}


//--correccion footer inicio de sesion-----


function footerFix() {
    
    if (screen.width<995) {
        document.getElementById("footerFix").classList.remove("fixed-bottom");
         
    }else{
        document.getElementById("footerFix").classList.add("fixed-bottom");
    }
}

