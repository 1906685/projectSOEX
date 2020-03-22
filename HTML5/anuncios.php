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
    <link ><a href="..https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Normalize.css">
    <link rel="stylesheet" href="../CSS/Styles.css">
</head>
<body>
    
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="../HTML5/index.html">
                    <img src="../img/logo.svg" alt="Logotipo Bienes Raices">
                </a>

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
        </div>
    </header>    
        
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

                    <a  href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
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

                    <a  href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
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
                        
                    <a  href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div><!--contenido anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <img src="../img/anuncio4.jpg" alt="Anuncio casa de lujo">
                <div class="contenido-anuncio">
                    <h3>Casa fuera de la ciudad</h3>
                    <p>Casa con alberca y acabados de lujo fuera de la ciudad, excelente 
                        oportunidad</p>
                    <p class="precio">$2,000,000</p>

                    <ul class="iconos-caracteristicas">
                            <li>
                                <img src="../img/icono_wc.svg" alt="icono wc">
                                <p>2</p>
                            </li>
                            <li>
                                <img src="../img/icono_estacionamiento.svg" alt="icono autos">
                                <p>2</p>
                            </li>
                            <li>
                                <img src="../img/icono_dormitorio.svg" alt="icono habitaciones">
                                <p>5</p>
                            </li>
                        </ul>
                        
                    <a  href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div><!--contenido anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <img src="../img/anuncio5.jpg" alt="Casa con alberca">
                <div class="contenido-anuncio">
                    <h3>Casa frente al bosque</h3>
                    <p>Casa con alberca frente al bosque, excelente oportunidad</p>
                    <p class="precio">$3,500,000</p>

                    <ul class="iconos-caracteristicas">
                            <li>
                                <img src="../img/icono_wc.svg" alt="icono wc">
                                <p>3</p>
                            </li>
                            <li>
                                <img src="../img/icono_estacionamiento.svg" alt="icono autos">
                                <p>2</p>
                            </li>
                            <li>
                                <img src="../img/icono_dormitorio.svg" alt="icono habitaciones">
                                <p>4</p>
                            </li>
                        </ul>
                        
                    <a href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div><!--contenido anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <img src="../img/anuncio6.jpg" alt="Casa con alberca">
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">$4,000,000</p>

                    <ul class="iconos-caracteristicas">
                            <li>
                                <img src="../img/icono_wc.svg" alt="icono wc">
                                <p>2</p>
                            </li>
                            <li>
                                <img src="../img/icono_estacionamiento.svg" alt="icono autos">
                                <p>5</p>
                            </li>
                            <li>
                                <img src="../img/icono_dormitorio.svg" alt="icono habitaciones">
                                <p>7</p>
                            </li>
                        </ul>
                        
                     <a href="anuncio.html" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div><!--contenido anuncio-->
            </div><!--anuncio-->

        </div> 
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2019 &COPY;</p>
        </div>
    </footer>
</body>
</html>