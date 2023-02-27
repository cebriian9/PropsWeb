let tongleNav = false
function perro() {
    if (tongleNav) {
        document.getElementById('tongleNav').innerHTML = '<i class="fa-solid fa-bars"></i>'
    } else {
        document.getElementById('tongleNav').innerHTML = '<i class="fa-solid fa-x"></i>'
    }

    tongleNav = !tongleNav
}