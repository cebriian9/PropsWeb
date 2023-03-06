//--Cambio de hamborgesa a X menu desplegable-----

let tongleNav = false
function xAnimation() {
    if (tongleNav) {
        document.getElementById('tongleNav').innerHTML = '<i class="fa-solid fa-bars"></i>'
    } else {
        document.getElementById('tongleNav').innerHTML = '<i class="fa-solid fa-x"></i>'
    }

    tongleNav = !tongleNav
}


//--correccion footer inicio de sesion-----





//--tabs en ajustess----

function openTabs(evt, ajuste) {
    
    let i, tabContent, tabLinks;
  
    // escondemos todos los contenidos
    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }
  
    // Quitamos la clase "active" de los links
    tabLinks = document.getElementsByClassName("tabLinks");
    for (i = 0; i < tabLinks.length; i++) {
      tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }
  
    // mostramos el contenido del link pinchado
    document.getElementById(ajuste).style.display = "block";
    evt.currentTarget.className += " active";
  }


  //--tabs en ajustess----

function openTabsRegistro(evt, ajuste) {
    
    let i, tabContent, tabLinks;
  
    // escondemos todos los contenidos
    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }
  
    // Quitamos la clase "active" de los links
    tabLinks = document.getElementsByClassName("tabLinks");
    for (i = 0; i < tabLinks.length; i++) {
      tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }
  
    // mostramos el contenido del link pinchado
    document.getElementById(ajuste).style.display = "block";
    evt.currentTarget.className += " active";
  }
  

function envioColor() {
  document.formColor.submit()
}