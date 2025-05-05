const track = document.getElementById("carouselTrack");
let currentIndex = 0;
const visibleItems = 3; // Cuántas imágenes se deben ver a la vez (ajustado para imágenes más grandes)
const totalItems = track.children.length;
const scrollStep = 120; // 100px image + 20px gap
const maxVisibleIndex = totalItems - visibleItems; // Última posición visible

function moveCarousel(direction) {
  currentIndex += direction;
  if (currentIndex < 0) currentIndex = 0;
  if (currentIndex > maxVisibleIndex) {
    currentIndex = maxVisibleIndex;
  }
  const scrollX = currentIndex * scrollStep;
  track.style.transform = `translateX(-${scrollX}px)`;
}

window.addEventListener('resize', () => {
  // Reiniciar índice al redimensionar
  currentIndex = 0;
  track.style.transform = `translateX(0px)`;
});

// Inicializa el carrito desde localStorage o crea uno vacío
let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

// Muestra la cantidad total de productos en el carrito
function actualizarCantidadCarrito() {
    const cantidadSpan = document.getElementById('carritoCantidad');
    cantidadSpan.textContent = carrito.length;
}

// Agrega un producto al carrito
function agregarAlCarrito(nombre, precio) {
    carrito.push({ nombre, precio });
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarCantidadCarrito();
}

// Actualiza la cantidad al cargar la página
document.addEventListener('DOMContentLoaded', actualizarCantidadCarrito);