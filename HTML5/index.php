<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> <!--Llamamos la fuente de GoogleFonts-->
    <link rel="stylesheet" href="../CSS/Normalize.css"> <!--Normalize es un reset para los estilos por default de cada navegador Se crea un .css a parte-->
    <link rel="stylesheet" href="../CSS/Styles.css"> <!--Mi hoja de estilos siempre debe ser la ultima-->
</head>
<body>
    
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div style="max-width: 30%;">
                    <a href="../HTML5/index.html"> <!--Insertamos la imagen dentro del enlace recargar la pag al clickear sobre ella-->
                        <img src="../img/ShopExpress.png" alt="Logotipo Bienes Raices">
                    </a>
                </div>
                <nav class="navegacion">
                <a href=""><?php echo $_SESSION['name']; ?></a>
                    <a href="login.php">Iniciar sesion</a>
                    <a href="registro.php">Registrate</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="logout.php">Salir</a>
                </nav>
            </div>

            <h1>Compra la Ropa con el Mejor Estilo del Mercado</h1>
        </div> <!--Cierre de contenedor-->
    </header>    
        
    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Más Sobre Nosotros</h2>
        
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="../img/icono1.svg" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Recusandae, dignissimos quo eaque aliquid dicta nulla id beatae sint, provident adipisci 
                consequuntur eum? Sequi labore temporibus laboriosam quisquam, ullam fuga quas.</p>  
            </div>            

            <div class="icono">
                <img src="../img/icono2.svg" alt="Icono Mejor Precio">
                <h3>El Mejor Precio</h3>
                <p>Recusandae, dignissimos quo eaque aliquid dicta nulla id beatae sint, provident adipisci 
                consequuntur eum? Sequi labore temporibus laboriosam quisquam, ullam fuga quas.</p>
            </div>

            <div class="icono">
                <img src="../img/icono3.svg" alt="Icono A Tiempo">
                <h3>A Tiempo</h3>
                <p>Recusandae, dignissimos quo eaque aliquid dicta nulla id beatae sint, provident adipisci 
                consequuntur eum? Sequi labore temporibus laboriosam quisquam, ullam fuga quas.</p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Casas y Depas en Venta</h2>
        
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="../img/anuncio1.jpg" alt="Casa de lujo en el lago">
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="../img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="../img/icono_estacionamiento.svg" alt="icono autos">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="../img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="../img/anuncio2.jpg" alt="Casa terminados de lujo">
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con diseño moderno, así como tecnología inteligente y amueblada</p>
                    <p class="precio">$2,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="../img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="../img/icono_estacionamiento.svg" alt="icono autos">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="../img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="../img/anuncio3.jpg" alt="Casa con alberca">
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                            <li>
                                <img src="../img/icono_wc.svg" alt="icono wc">
                                <p>3</p>
                            </li>
                            <li>
                                <img src="../img/icono_estacionamiento.svg" alt="icono autos">
                                <p>3</p>
                            </li>
                            <li>
                                <img src="../img/icono_dormitorio.svg" alt="icono habitaciones">
                                <p>4</p>
                            </li>
                        </ul>
                        
                    <a href="..anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>
        </div>

            <div class="ver-todas">
                <a href="..anuncios.html" class="boton boton-verde">Ver Todas</a>
            </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contaco contigo 
            a la brevedad</p>
            <a href="..contacto.html" class="boton boton-amarillo">Contáctanos</a>
        </div>
    </section>

    <div class="seccion-inferior contenedor seccion">

        <section class="blog">
            <h3 class="centrar-texto fw-300">Nuestro Blog</h3>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../img/blog1.jpg" alt="Entrada de Blog">
                </div>
                <div class="texto-entrada">
                    <a href="..entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                    </a>
                    <p>Escrito el: <span>18/04/2019</span> por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa, con los mejores
                    materiales y ahorrando dinero</p>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../img/blog2.jpg" alt="Entrada de Blog">
                </div>
                <div class="texto-entrada">
                    <a href="..entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                    </a>
                    <p>Escrito el: <span>18/04/2019</span> por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y
                    colores para darle vida a tu espacio</p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3 class="centrar-texto fw-300">Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa 
                    que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Reybert Peñuela</p>
            </div>
        </section>

    </div>  

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &COPY;</p>
        </div>
    </footer>
</body>
</html>