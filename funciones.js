// script.js

// Función para mostrar/ocultar el submenú al hacer clic en el icono
function toggleSubMenu(icono) {
    var subMenu = icono.querySelector('.subMenu');
    if (subMenu) {
        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
    }
}

// Asignar el evento clic a los iconos con submenú
var iconosConSubMenu = document.querySelectorAll('.icono');
iconosConSubMenu.forEach(function(icono) {
    icono.addEventListener('click', function() {
        toggleSubMenu(icono);
    });
});