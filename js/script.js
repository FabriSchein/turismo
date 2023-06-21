
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo",window.scrollY>0);
})

// Obtén todos los elementos de icono
var icons = document.querySelectorAll('.icon');

// Agrega una clase adicional para animar los iconos
icons.forEach(function(icon) {
  icon.classList.add('animated-icon');
});