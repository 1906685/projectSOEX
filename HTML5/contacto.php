
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
        
    <h1 class="fw-300 centrar-texto">Contacto</h1>
    <img src="../img/destacada3.jpg" alt="Imagen Principal">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de contacto</h2>

        <form action="">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" placeholder="Tu Nombre">

                <label for="email">E-mail: </label>
                <input type="email" id="email" placeholder="Tu Correo Electrónico" required>

                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" placeholder="Tu Teléfono" required>

                <label for="mensaje">Mensaje: </label>
                <textarea  id="mensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Sobre Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- seleccione --</option>
                    <option value="Compra">Compra</option>+
                    <option value="Vende">Vende</option>
                </select>

                <label for="cantidad">cantidad:</label>
                <input type="number"min="0">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser Contactado:</p>
                <label for="telefono">Teléfono</label>
                <input type="radio" name="Contacto"  value="telefono" id="telefono">

                <label for="telefono">E-mail</label>
                <input type="radio" name="Contacto" value="correo" id="Correo">

                <p>Si elegió Teléfono, elija la fecha y la hora</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">
                


            </fieldset>

            <input type="submit" value="Enviar" class="boton boton-verde">

        </form>
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