<?php
	require 'configSoex.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'Ingrese un usuario';
		if($password == '')
			$errMsg = 'ingrese una contraseña';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT codusuario, clave FROM usuarios WHERE codusuario = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "Usuario $username no encontrado.";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['name'] = $data['codusuario'];
						$_SESSION['username'] = $data['clave'];

						header('Location: index.php');
						exit;
					}
					else
						$errMsg = 'Contraseña Incorrecta.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inicio de sesion</title>
    <link rel="stylesheet" href="/css/micuenta.css">
</head>
<body>
        <div class="contenedor margen-interno ">
			<div class="form-header">
				<h1 class="form-title">I<span>nicio de secion</span></h1>
			</div>
			<form action="" class="form" method="post">
				<label for="nombre" class="form-label">Nombre de usuario o correo</label>
				<input type="text" name="Username" class="form-input" placeholder="Escriba su nombre de usuario o correo electronico">
				
				<label for="nombre" class="form-label">ingrese su contraseña:</label>
				<input type="password" name="password" class="form-input" placeholder="Escriba su contraseña">
	
				<input type="submit" name="login" class="btn-submit" value="iniciar secion">
			</form>
			
			<br>
			<br>
			
			<a href="/html/micuenta.html"><input type="button" class="btn-submit" value="Registrate"></a>
			
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
		</div>
</body>
</html>