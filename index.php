
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Asegúrate de tener Font Awesome en tu HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/estatic/styles.css">
</head>
<body>
    <header class="navbar">
        <div href="" class="logo">
            <i class="fa-solid fa-wine-bottle"></i>
            <h4>Logo</h4>
        </div>
        <div href="" class="localizacion">
            <i class="fa-solid fa-location-dot"></i>
            <h4>Ingresa<br>Tu codigo Postal</h4>
        </div>
        <div href="" class="barrita">
            <div class="input-con-icono">
            <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Que estas Buscando Hoy">
            </div>
        </div>
        <div href="" class="seccion">
            <i class="fa-solid fa-users"></i>
            <h4>iniciar seccion <br>Registrate</h4>
        </div>
        <a href="carrito.php" class="carrito">
          <i class="fa-solid fa-cart-shopping"></i>
          <span class="carrito-cantidad" id="carritoCantidad">0</span>
          <h4>carrito</h4>
        </a>

    </header>

    <section class="inicio-secion">
    <div class="menu">
        <i class="fa-solid fa-bars"></i>
        <h4>Plataforma</h4>
    </div>
    <div class="subtitulos">
        <h5>Inicio</h5>
        <h5>Productos</h5>
        <h5>Servicios</h5>
        <h5>Contacto</h5>
        <h5>Blog</h5>
    </div>
</section>

<div class="carousel-container">
  <button class="carousel-arrow arrow-left" onclick="moveCarousel(-1)">&#8249;</button>
  
  <div class="carousel-wrapper">
    <div class="carousel-track" id="carouselTrack">
      <div class="carousel-item"><img src="https://wallpapercave.com/wp/wp9906497.jpg" alt=""><p>Texto 1</p></div>
      <div class="carousel-item"><img src="https://th.bing.com/th/id/OIP.N2b6W8w2rwcuv2tuTdIqnwHaHa?rs=1&pid=ImgDetMain" alt=""><p>Texto 2</p></div>
      <div class="carousel-item"><img src="https://th.bing.com/th/id/OIP.MSQ28BNGJynEBOGtgTMsbAHaHa?rs=1&pid=ImgDetMain" alt=""><p>Texto 3</p></div>
      <div class="carousel-item"><img src="https://i.pinimg.com/736x/39/1a/16/391a161cdbc5109a847313724847548e--water-bottles-packaging-design.jpg" alt=""><p>Texto 4</p></div>
      <div class="carousel-item"><img src="https://th.bing.com/th/id/OIP.35KhRxjiq8uSFe2eZryblAHaJQ?w=1000&h=1250&rs=1&pid=ImgDetMain" alt=""><p>Texto 5</p></div>
      <div class="carousel-item"><img src="https://img.freepik.com/fotos-premium/imagenes-producto-rc-cola-alta-calidad-4k-ultra-h_670382-99083.jpg" alt=""><p>Texto 6</p></div>
      <div class="carousel-item"><img src="https://th.bing.com/th/id/OIP.LHsH0CgZzPH1lOOw4AroYAHaHa?rs=1&pid=ImgDetMain" alt=""><p>Texto 7</p></div>
    </div>
  </div>
  
  <button class="carousel-arrow arrow-right" onclick="moveCarousel(1)">&#8250;</button>
</div>

<section class="seccion-decorada">
  <div class="contenido">
    <h1>Explora Nuevas Posibilidades</h1>
    <div class="botones">
      <button>Comenzar</button>
      <button>Ver Más</button>
    </div>
  </div>
  <div class="imagen-container">
    <img src="https://static-cse.canva.com/blob/984340/15Secretosfotosdeproducto1.jpg" alt="Imagen decorativa">
  </div>
</section>

<section class="icon-section">
  <div class="icon"><i class="fa fa-home"></i></div>
  <div class="icon"><i class="fa fa-user"></i></div>
  <div class="icon"><i class="fa fa-envelope"></i></div>
  <div class="icon"><i class="fa fa-bell"></i></div>
  <div class="icon"><i class="fa fa-cog"></i></div>
  <div class="icon"><i class="fa fa-heart"></i></div>
  <div class="icon"><i class="fa fa-comment"></i></div>
  <div class="icon"><i class="fa fa-search"></i></div>
  <div class="icon"><i class="fa fa-camera"></i></div>
  <div class="icon"><i class="fa fa-star"></i></div>
</section>

<section class="cards-contenedor">
  <div class="card">
    <img src="https://th.bing.com/th/id/OIP.vno3Qw97M5-57G2dxNhjAgHaEK?rs=1&pid=ImgDetMain" alt="Producto 1">
    <h4>Botella Preferida</h4>
    <p>$10.00</p>
    <button onclick="agregarAlCarrito('Producto 1', 10)">Agregar</button>
  </div>
  <div class="card">
    <img src="https://th.bing.com/th/id/OIP.zjD_bk0yqQEj2ZTYH77argHaE8?rs=1&pid=ImgDetMain" alt="Producto 2">
    <h4>Bebida de Mango</h4>
    <p>$15.00</p>
    <button onclick="agregarAlCarrito('Producto 2', 15)">Agregar</button>
  </div>
  <div class="card">
    <img src="https://th.bing.com/th/id/OIP.vno3Qw97M5-57G2dxNhjAgHaEK?rs=1&pid=ImgDetMain" alt="Producto 3">
    <h4>reloj</h4>
    <p>$12.00</p>
    <button onclick="agregarAlCarrito('Producto 3', 12)">Agregar</button>
  </div>
  <div class="card">
    <img src="https://wallpapercave.com/wp/wp9277620.jpg" alt="Producto 4">
    <h4>Cafe fresco</h4>
    <p>$9.00</p>
    <button onclick="agregarAlCarrito('Producto 4', 9)">Agregar</button>
  </div>
  <div class="card">
    <img src="https://th.bing.com/th/id/OIP.WYUOQfXH4etxPpqlCL8IrwHaEo?rs=1&pid=ImgDetMain" alt="Producto 5">
    <h4>Refresco</h4>
    <p>$11.00</p>
    <button onclick="agregarAlCarrito('Producto 5', 11)">Agregar</button>
  </div>
  <div class="card">
    <img src="https://services.meteored.com/img/article/hasta-100-veces-mas-de-lo-estimado-revelan-que-el-agua-embotellada-contiene-miles-de-particulas-de-plastico-1705165218956_1280.png" alt="Producto 6">
    <h4>Agua Enbotellada</h4>
    <p>$13.00</p>
    <button onclick="agregarAlCarrito('Producto 6', 13)">Agregar</button>
  </div>
  <div class="card">
    <img src="https://th.bing.com/th/id/OIP.wCFK0vjyDmLdWwJhqQiVJAHaEJ?rs=1&pid=ImgDetMain" alt="Producto 7">
    <h4>Refresco De Sabores</h4>
    <p>$14.00</p>
    <button onclick="agregarAlCarrito('Producto 7', 14)">Agregar</button>
  </div>
</section>


<!-- Asegúrate de tener Font Awesome en tu HTML -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</body>
<script src="/estatic/script.js"></script>
</html>
