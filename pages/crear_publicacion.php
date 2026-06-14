<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login_user.php"); // Redirigir si no está logueado
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>COMPRA FACIL</title>
    <link rel="shortcut icon" href="../access/img/Logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/styleproduct.css">
</head>
<body>
<header>
	<script>
	document.addEventListener("DOMContentLoaded", () => {
		document.querySelectorAll("h1, h2, h3").forEach(el => {
			el.addEventListener("copy", e => e.preventDefault());
			el.addEventListener("cut", e => e.preventDefault());
			el.addEventListener("contextmenu", e => e.preventDefault());
		});
	});
	</script>
		<nav class="navbar">
			<div class="contenedor">
				<a href="../index.php">Inicio</a>
				<a href="#">Categoria</a>
				<a href="#">Ofertas</a>
				<a href="Ropa.html">Moda</a>
				<a href="#">Cartera</a>
				<?php if(isset($_SESSION['usuario'])): ?>
				<a href="javascript:void(0)" class="user-icon"><?php echo $_SESSION['usuario']; ?></a>
				<div class="user-container">
					<div class="dropdown-menu">
						<div class="dropdown-wrapper">
							<div class="user-info">
								<h3><?php echo $_SESSION['nombre']; ?></h3>
							</div>
							<hr>
							<div class="menu-options">
								<div>
								<a href="../php/logout.php">Cerrar sesión</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</nav>
					<?php else: ?>
    				<a href="../pages/register.php">Iniciar Sesión</a>
			</div>
		</nav>					
					<?php endif; ?>
</header>
    <main>
        <h1>Crear Nueva Publicación</h1>
        <form action="../php/process_publication.php" method="POST" enctype="multipart/form-data">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required><br>

            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" required><br>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea><br>

            <label for="categoria">Categoría:</label>
            <input type="text" id="categoria" name="categoria" required><br>

            <label for="cualidades">Cualidades:</label>
            <input type="text" id="cualidades" name="cualidades" required><br>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required><br>

            <button type="submit">Crear Publicación</button>
        </form>
    </main>
<footer>
		</script>
		<nav class="navbar">
				<a href="#">Soporte</a>
			</div>	
		</nav>
</footer>
</body>
</html>