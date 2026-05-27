<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login & register - CompraFacil</title>
        <link rel="shortcut icon" href="../access/Img/Logo.ico">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/StyleLogin.css">
</head>
<body>

	<main>
		<div class="contenedor__todo">
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>iniciar sesión para entrar en la página</p>
					<button id="btn__iniciar-sesion">Iniciar Sesión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿Aun no tienes una cuenta?</h3>
					<p>Registrate para poder Iniciar Sesión</p>
					<button id="btn__registrarse">Registrarse</button>
				</div>
			</div>
			<!--Formulario de Login y Register-->
			<div class="contenedor__login-register">
				<!--Login-->
				<form action="../php/login_usuario.php" method="POST" class="formulario__login"> 
					<h2>Iniciar Sesión</h2>
					<input type="text" placeholder="Correo Electronico" name ="email">
					<input type="password" placeholder="contraseña" name ="contrasena">
					<button>Entrar</button>	
				</form>
				<!--Register-->
				<form action="../php/register.php" method="POST" class="formulario__register">
					<h2>Registrarse</h2>
					<input type="text" placeholder="Nombre Completo" name = "nombre">
					<input type="text" placeholder="Correo Electronico" name = "email">
					<input type="text" placeholder="Nombre del Usuario" name = "usuario">
					<input type="password" placeholder="Contraseña" name = "contrasena">
					<button>Regístrarse</button>	
				</form>
			</div>
		</div>
	</main>
	<script src="../js/script.js"></script>
</body>
</html> 