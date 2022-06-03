const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
const AvisoCookies = document.getElementById('aviso-cookies');
const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

dataLayer = [];

// if(!localStorage.getItem('cookies-aceptadas')){
    AvisoCookies.classList.add('activo');
    fondoAvisoCookies.classList.add('activo');
    botonAceptarCookies.classList.add('activo');
// }

botonAceptarCookies.addEventListener('click', () => {
     AvisoCookies.classList.remove('activo');
     fondoAvisoCookies.classList.remove('activo');
 
     localStorage.setItem('cookies-aceptadas', true);

     dataLayer.push({'event': 'cookies-aceptadas'});
});