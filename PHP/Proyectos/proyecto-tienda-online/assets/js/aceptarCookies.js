document.addEventListener("DOMContentLoaded", lanzarAvisoCookies);

function lanzarAvisoCookies(){
    var elementoCookies = document.createElement("div");
    elementoCookies.innerHTML = "<p id='aceptaCookies'>Al navegar estas aceptando nuestra politca de Cookies"
        +"<span onclick='eliminaCookies()'> ACEPTAR </span></p>";
    document.body.appendChild(elementoCookies);
    elementoCookies.classList.add("avisoCookies");
}

function eliminaCookies(){
    let aceptaCookies = document.getElementById('aceptaCookies');
    let padre = aceptaCookies.parentNode;
    padre.parentNode.removeChild(padre);
}
