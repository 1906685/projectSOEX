
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
        
    <main class="contenedor">
        <h1 class="fw-300 centrar-texto">Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <img src="../img/nosotros.jpg" alt="Imagen Sobre Nosotros">
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>

                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Vestibulum ac fermentum elit. Fusce augue sem, facilisis 
                a pharetra et, vestibulum id quam. Donec vitae auctor dui, 
                in pharetra ante. Fusce ultrices eleifend est id placerat. 
                Donec sollicitudin ultricies nulla at suscipit. Sed pulvinar 
                vitae dui quis tristique. Fusce iaculis neque vitae mauris 
                sodales, ut posuere diam dictum. Donec nisl est, commodo id 
                imperdiet non, varius eget lacus. Duis elit sapien, 
                luctus ac blandit non, malesuada ut metus. Phasellus 
                efficitur vel magna ac luctus. Nullam pellentesque leo 
                id interdum convallis. </p>

                <p> Praesent convallis mattis porttitor. Ut vehicula sodales 
                augue, eget gravida sem rhoncus non. Curabitur eget faucibus 
                augue. Orci varius natoque penatibus et magnis dis parturient 
                montes, nascetur ridiculus mus. Vivamus sit amet tortor viverra, 
                tempus dolor ac, finibus lacus. Morbi quis sem sed lorem 
                malesuada fermentum. Fusce enim lacus, lobortis vitae magna ut, 
                dignissim consequat purus. </p>

            </div>
        </div>
    </main>

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

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2019 &COPY;</p>
        </div>
    </footer>
</body>
</html>