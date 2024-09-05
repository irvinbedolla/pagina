const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});
function abrirEnNuevaPestana(event) {
  event.preventDefault();  // Prevenir el comportamiento predeterminado del enlace
  var url = event.target.href;
  window.open(url, '_blank');  // Abrir la URL en una nueva pestaña
}