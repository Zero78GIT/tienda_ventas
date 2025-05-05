<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f4f4f4;
    }
    h1 {
      margin-bottom: 20px;
    }
    .carrito-container {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
      max-width: 800px;
      margin: auto;
    }
    .producto {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }
    .producto h4, .producto p {
      margin: 0;
    }
    .boton-eliminar {
      background: red;
      color: white;
      border: none;
      padding: 6px 10px;
      border-radius: 4px;
      cursor: pointer;
    }
    .acciones {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }
    .total {
      font-weight: bold;
      font-size: 18px;
    }
    #vaciarCarrito {
      background-color: #555;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    #paypal-button-container {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="carrito-container">
    <h1>Tu Carrito</h1>
    <div id="carritoProductos"></div>

    <div class="acciones">
      <button id="vaciarCarrito">Vaciar Carrito</button>
      <p class="total" id="totalCarrito">Total: $0.00</p>
    </div>

    <div id="paypal-button-container"></div>
  </div>

  <!-- PayPal SDK -->
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

  <script>
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const contenedor = document.getElementById('carritoProductos');
    const totalTexto = document.getElementById('totalCarrito');

    function renderCarrito() {
      contenedor.innerHTML = '';
      let total = 0;

      if (carrito.length === 0) {
        contenedor.innerHTML = '<p>No hay productos en el carrito.</p>';
        totalTexto.textContent = 'Total: $0.00';
        document.getElementById('paypal-button-container').innerHTML = '';
        return;
      }

      carrito.forEach((producto, index) => {
        const div = document.createElement('div');
        div.className = 'producto';
        div.innerHTML = `
          <div>
            <h4>${producto.nombre}</h4>
            <p>Precio: $${producto.precio.toFixed(2)}</p>
          </div>
          <button class="boton-eliminar" onclick="eliminarProducto(${index})">Eliminar</button>
        `;
        contenedor.appendChild(div);
        total += producto.precio;
      });

      totalTexto.textContent = `Total: $${total.toFixed(2)}`;
      renderPayPalButton(total);
    }

    function eliminarProducto(index) {
      carrito.splice(index, 1);
      localStorage.setItem('carrito', JSON.stringify(carrito));
      renderCarrito();
    }

    document.getElementById('vaciarCarrito').addEventListener('click', () => {
      carrito = [];
      localStorage.removeItem('carrito');
      renderCarrito();
    });

    function renderPayPalButton(total) {
      document.getElementById('paypal-button-container').innerHTML = ''; // limpiar

      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: total.toFixed(2)
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Pago completado por ' + details.payer.name.given_name);
            carrito = [];
            localStorage.removeItem('carrito');
            renderCarrito();
          });
        }
      }).render('#paypal-button-container');
    }

    document.addEventListener('DOMContentLoaded', renderCarrito);
  </script>
</body>
</html>
