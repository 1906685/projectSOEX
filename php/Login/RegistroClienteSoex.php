<?php
	require 'configSoex.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$Nombre = $_POST['Nombre'];
		$Apellido = $_POST['Apellido'];
		$Documento = $_POST['Documento'];
		$NumCel = $_POST['NumCel'];
		$NumTel = $_POST['NumTel'];
		$Direccion = $_POST['Direccion'];
		$Email = $_POST['Email'];
		$UserName = $_POST['UserName'];
		$Password = $_POST['Password'];
		//$Register = $_POST['Register'];

		echo '<script>console.log('.$Password.')</script>';
		

		if($Nombre == '')
			$errMsg = 'Ingrese su nombre';
		if($Apellido == '')
			$errMsg = 'Ingrese su apellido';
		if($Documento == '')
			$errMsg = 'Ingrese su documento';
		if($NumCel == '')
			$errMsg = 'Ingrese su número de celular';
		if($NumTel == '')
			$errMsg = 'Ingrese su número de teléfono';
		if($Direccion == '')
			$errMsg = 'Ingrese su Dirección';
		if($Email == '')
			$errMsg = 'Ingrese su E-mail';
		if($UserName == '')
			$errMsg = 'Ingrese su nombre de usuario';
		if($Password == '')
			$errMsg = 'Ingrese su contraseña';

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO clientes (Nombre, Apellido, DocCliente, Direccion) VALUES (:Nombre, :Apellido, :Documento, :Direccion)');
				$stmt->execute(array(
					':Nombre' => $Nombre,
					':Apellido' => $Apellido,
					':Documento' => $Documento,
					':Direccion' => $Direccion
					));
				$stmtt = $connectt->prepare('INSERT INTO usuarios (CodUsuario, Clave, CodDocumento) VALUES (:UserName,:Password,:Documento)');
				$stmtt->execute(array(
					':UserName' => $UserName,
					':Password' => $Password,
					':Documento' => $Documento
					));
				$stmttt = $connecttt->prepare('INSERT INTO contacto (Email, Telefono1, Telefono2, CodDocumento) VALUES (:Email, :NumCel, :NumTel, :Documento)');
				$stmttt->execute(array(
					':Email' => $Email,
					':NumCel' => $Telefono1,
					':NumTel' => $Telefono2,
					':Documento' => $Documento
					));
				header('Location: RegistroClienteSoex.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Registro Exitoso!!. Ahora puede Ingresar <a href="InicioSesionSoex.php.php">Ingreso</a>';
	}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion</title>
    <!--<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/micuenta.css">-->

    <div class="contenedor">
        <div class="barra">
            <img src="IMG/logo.png" alt="imglogo" height="100px" width="270px">
            <nav class="navegacion">
                <a href="/html/iniciodesecion.html">Iniciar sesion</a>
                <a href="/HTML/categorias.html">Categorías</a>
                <a href="/HTML/carrocompras.html">Mi Carrito</a>
            </nav>
        </div>
    </div>
</head>

<body>
    <div class="contenedor margen-interno ">
        <form action="" class="form">
            <div class="form-header">
                <h1 class="form-title">R<span>egistro De Clientes</span></h1>
            </div>
            <form action="add.php" method="post" name="form1">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="Nombre" class="form-input" placeholder="Escriba su nombre">

                <label for="nombre" class="form-label">Apellido:</label>
                <input type="text" name="Apellido" class="form-input" placeholder="Escriba su apellido">

                <label for="nombre" class="form-label">Documento:</label>
                <input type="number" name="Documento" class="form-input" placeholder="Escriba su documento de identidad">

                <label for="nombre" class="form-label">Número de celular:</label>
                <input type="number" name="NumCel" class="form-input" placeholder="Escriba su número de celular">

                <label for="nombre" class="form-label">Número de teléfono:</label>
                <input type="number" name="NumTel" class="form-input" placeholder="Escriba su número de teléfono">

                <label for="nombre" class="form-label">Dirección:</label>
                <input type="text" name="Direccion" class="form-input" placeholder="Escriba su dirección">

                <label for="nombre" class="form-label">E-mail:</label>
                <input type="email" Name="Email" class="form-input" placeholder="Escriba su correo electrónico">

				<label for="nombre" class="form-label">Nombre de usuario:</label>
                <input type="text" Name="UserName" class="form-input" placeholder="Escriba su nombre de usuario">

                <label for="nombre" class="form-label">Contraseña</label>
                <input type="password" name="Password" class="form-input" placeholder="Escriba su Contraseña">

                <input type="submit" class="btn-submit" name="Register" value="Realizar registro">

                <br>
                <br>
                <a href="InicioSesionSoex.php"><input type="button" class="btn-submit" value="Iniciar secion"></a>
            </form>
		</form>
		
		<?php
					if(isset($errMsg)){
						echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
					}
			?>
		
	</div>
</body>

</html>