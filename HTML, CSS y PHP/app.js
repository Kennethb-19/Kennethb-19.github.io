/* Cuando hago click en .button, .nav TOGGLE 'activo'  */

const button = document.querySelector('.button')
const nav = document.querySelector('.nav')

button.addEventListener('click', ()=>{
    nav.classList.toggle('activo')
})

// Agrega un evento de clic al botón para volver al comienzo
document.getElementById('btnVolverArriba').addEventListener('click', function() {
    // Desplázate suavemente al comienzo de la página usando el método scrollTo
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
  
  // Muestra u oculta el botón según la posición de desplazamiento
  window.addEventListener('scroll', function() {
    var btnVolverArriba = document.getElementById('btnVolverArriba');
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      btnVolverArriba.style.display = 'block';
    } else {
      btnVolverArriba.style.display = 'none';
    }
  });
  