<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="css/estilos-welcome.css">

</head>
<body>
     <header class="header"> 

        <div class="menu container">
            <a href="#" class="logo"> LE PERFUM </a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li> <a href="#">Inicio</a></li>
                    <li> <a href="#">Servicios</a></li>
                    <li> <a href="#">Productos</a></li>
                    <li> <a href="#">Contactanos</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>

            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="img/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-content container">
            <div class="header-img">
                <img src="img/right.png" alt="">
            </div>
            <div class="header-txt">
                <h1>Ofertas especiales</h1>
                <p>Estrena los mejores aromas</p>
                <a href="#" class="btn-1">Informacion</a>
            </div>

        </div>

     </header>
     <section class="ofert container">
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="img/eros.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Versace Eros</h3>
                <a href="#" class="btn-2">informacion</a>
            </div>
        </div>
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="img/Badboy.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Bad Boy</h3>
                <a href="#" class="btn-2">informacion</a>
            </div>
        </div>
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="img/toy-boy.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Toy boy</h3>
                <a href="#" class="btn-2">informacion</a>
            </div>
        </div>
     </section>

     <main class="products container" id="lista-1">
        <h2>Productos</h2>

        <div class="product-content">
        
            <div class="product">
                <img src="img/dazzle.png" alt="">
                <div class="product-txt">
                    <h3>Dazzle</h3>
                    <p>Calidad Premium</p>
                    <p>$50.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito </a>
                </div>
            </div>
            
            <div class="product">
                <img src="img/lattafa.png" alt="">
                <div class="product-txt">
                    <h3>Lattafa</h3>
                    <p>Calidad Premium</p>
                    <p>$50.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="2">Agregar al carrito </a>
                </div>
            </div>

            <div class="product">
                <img src="img/212-vip.png" alt="">
                <div class="product-txt">
                    <h3>212 VIP</h3>
                    <p>Calidad Premium</p>
                    <p>$50.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="3">Agregar al carrito </a>
                </div>
            </div>
            <div class="product">
                <img src="img/victoria-secret.png" alt="">
                <div class="product-txt">
                    <h3>Victoria Secret</h3>
                    <p>Calidad Premium</p>
                    <p>$50.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar al carrito </a>
                </div>
            </div>
             
            
        <div class="product">
                <img src="img/blackxs.png" alt="">
                <div class="product-txt">
                    <h3>Black XS</h3>
                    <p>Calidad Premium</p>
                    <p>$50.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="5">Agregar al carrito </a>
                </div>
            </div>

            <div class="product">
                <img src="img/blue-channel.png" alt="">
                <div class="product-txt">
                    <h3>Blue de Channel</h3>
                    <p>Calidad Premium</p>
                    <p>$50.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="6">Agregar al carrito </a>
                </div>
            </div>


            

        </div>
     </main>

     <section class="icons container">

        <div class="icon-1">
            <div class="icon-img">
                <img src="img/icon1.png" alt="">
            </div>
            <div class="icon-txt">
                <h3>Los más queridos.</h3>
                <p>
                    Perfumes más vendidos y amados.
                </p>
            </div>

        </div>
        
        <div class="icon-1">
            <div class="icon-img">
                <img src="img/icon2.png" alt="">
            </div>
            <div class="icon-txt">
                <h3>Calidad garantizada.</h3>
                <p>
                    Autenticidad y calidad aseguradas
                </p>
            </div>

        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="img/icon3.png" alt="">
            </div>
            <div class="icon-txt">
                <h3>Ofertas calientes.</h3>
                <p>
                    Las mejores ofertas del momento.
                </p>
            </div>
        </div>

     </section>

     <section class="blog container">

        <div class="blog-1">
            <img src="img/blog1.jpg" alt="">
            <h3>Cómo Elegir el Perfume Perfecto</h3>
            <p>
                Elegir el perfume adecuado es un arte que refleja tu personalidad. 
                Primero, identifica las notas que te atraen: las notas de salida son frescas y ligeras, las de corazón son el alma de la fragancia, y las de fondo son las que perduran. 
                Prueba siempre un perfume en tu piel antes de comprarlo, ya que la química corporal puede alterar el aroma. 
                Considera la temporada y la ocasión: 
                fragancias frescas para el día y aromas más intensos para la noche. 
                Invertir en un perfume de calidad es clave para crear tu firma olfativa única.
            </p>
        </div>

        <div class="blog-1">
            <img src="img/blog2.jfif" alt="">
            <h3>Cuida tu Perfume para Prolongar su Vida Útil</h3>
            <p>
                El almacenamiento adecuado de tu perfume es clave para mantener su calidad. 
                Guarda tus fragancias en un lugar fresco y oscuro, lejos de la luz directa del sol y de fuentes de calor. 
                Evita dejar el frasco en el baño, ya que la humedad puede alterar su composición. 
                Mantener el tapón bien cerrado también ayuda a preservar el aroma. 
                Siguiendo estos sencillos pasos, podrás disfrutar de tu perfume favorito por mucho más tiempo.
            </p>
        </div>

        <div class="blog-1">
            <img src="img/blog3.jfif" alt="">
            <h3>Cómo Aplicar Perfume para un Aroma Duradero</h3>
            <p>
                La forma en que aplicas tu perfume puede hacer una gran diferencia en cuánto tiempo dura su aroma. 
                Aplica el perfume en los puntos de pulso como las muñecas, detrás de las orejas, en el cuello, y en la parte interna de los codos. 
                Estos puntos irradian calor, lo que ayuda a difundir el aroma a lo largo del día. 
                Evita frotar las muñecas después de aplicar el perfume, ya que esto puede romper las moléculas de la fragancia y reducir su duración. 
                Para un efecto sutil, también puedes aplicar una pequeña cantidad en el cabello o en la ropa.
            </p>
        </div>

     </section>

     <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <h3>Sobre nosotros</h3>
                <ul>
                    <li> <a href="#">Nuestra Historia</a></li>
                    <li> <a href="#">Vision y Mision</a></li>
                    <li> <a href="#">Compromiso de calidad</a></li>
                    <li> <a href="#">Testimonios</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Categorias</h3>
                <ul>
                    <li> <a href="#">Perfumes para mujer</a></li>
                    <li> <a href="#">Perfumes para Hombres</a></li>
                    <li> <a href="#">Ediciones limitadas</a></li>
                    <li> <a href="#">Ofertas Especiales</a></li>
                </ul>
            </div>


            <div class="link">
                <h3>Atencion al Cliente</h3>
                <ul>
                    <li> <a href="#">Preguntas frecuentes</a></li>
                    <li> <a href="#">Politicas de Devoluciones</a></li>
                    <li> <a href="#">Envios y Entregas</a></li>
                    <li> <a href="#">Contáctanos</a></li>
                </ul>
            </div>

            <div class="link">z
                <h3>Conectate con Nosostros</h3>
                <ul>
                    <li> <a href="#">Facebook</a></li>
                    <li> <a href="#">Instagram</a></li>
                    <li> <a href="#">Twitter</a></li>
                </ul>
            </div>


        </div>

     </footer>

    <script src="js/script.js"> </script>

</body>
</html>