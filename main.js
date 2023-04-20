document.addEventListener('DOMContentLoaded', function() {

  // Selecciona el elemento de texto y guárdalo en una variable
  var texto = document.querySelector('.textoProducto');
  
  // Agrega la clase 'mostrar' al elemento de texto después de un retardo de 1 segundo
  setTimeout(function() {
    texto.classList.add('mostrar');
  }, 300);
  
});