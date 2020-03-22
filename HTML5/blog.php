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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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

    <main class="contenedor secciom contenido-centrado">
        <h1 class="fw-300 centrar-texto">Nuestro Blog</h1>
            
        <article class="entrada-blog">
            <div class="imagen">
                <img src="../img/blog1.jpg" alt="Entrada de Blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
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
                <a href="entrada.html">
                    <h4>Construye una alberca en tu hogar</h4>
                </a>
                <p>Escrito el: <span>18/04/2019</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y
                colores para darle vida a tu espacio</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="../img/blog3.jpg" alt="Entrada de Blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                <p>Escrito el: <span>18/04/2019</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y
                colores para darle vida a tu espacio</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="../img/blog4.jpg" alt="Entrada de Blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guía para la decoración de tu habitación</h4>
                </a>
                <p>Escrito el: <span>18/04/2019</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y
                colores para darle vida a tu espacio</p>
            </div>
        </article>
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