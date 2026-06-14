<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>COMPRA FACIL</title>
    <link rel="shortcut icon" href="access/img/Logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/styles.css">
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
				<a href="#">Inicio</a>
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
								<a href="php/logout.php">Cerrar sesión</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</nav>
					<?php else: ?>
    				<a href="pages/register.php">Iniciar Sesión</a>
			</div>
		</nav>					
					<?php endif; ?>
		<div class="contenedor-imagen">
			<a href="#">
				<img src="access/img/ImagIndex.png" width="50%">
			</a>
		</div>
	</header>
		<div class="containerdos">
			<input type="text" placeholder="Buscar...">
			<button><i class="fa-solid fa-magnifying-glass"></i></button>
		</div>
<main id="blog">
		<div class="contenedor">
			<aside>
				<h3 class="titulo">Accesorios</h3>
				<nav class="indice">
					<a href="#">Muebles</a>
					<a href="#">Tecnologia</a>
					<a href="#">Musica</a>
					<a href="#">Libreria</a>
				</nav>
			</aside>
<div class="page-content">
	<div class="card">
		<img src="access/img/product-4.jpg" alt="Avatar" style="width:300px">
			<div class="container">
				<h4><b>Rack Grande Estilo Industrial</b></h4>
					<div class="v">
						<p>$33.869</p>
					</div>
					<button class="button-add">Añadir al carrito</button>
			</div>
	  </div> 
	  <div class="card">
		<img src="access/img/product-3.jpg" alt="Avatar" style="width:300px">
			<div class="container">
				<h4><b>Sofa Esquinero con Puff Jecay</b></h4>
					<div class="v">
						<p>$84.599</p>
					</div>
					<button class="button-add">Añadir al carrito</button>
			</div>
	  </div> 
	  <div class="card">
		<img src="access/img/product-2.jpg" alt="Avatar" style="width:300px">
			<div class="container">
				<h4><b>PC GAMER GM CARBIDE I5 GF1660TI</b></h4>
					<div class="v">
						<p>$422.749</p>
					</div>
					<button class="button-add">Añadir al carrito</button>
			</div>
	  </div>

	  <div class="card">
		<img src="access/img/product-1.png" alt="Avatar" style="width:300px">
			<div class="container">
				<h4><b>Laptop gamer Legion 7i 6ta Gen</b></h4>
					<div class="v">
						<p>$857.999</p>
					</div>
					<button class="button-add">Añadir al carrito</button>
			</div>
	  </div>
</div>
</main>
<footer>
		</script>
		<nav class="navbar">
				<a href="#">Soporte</a>
			</div>	
		</nav>
</footer>

<script>
const userIcon = document.querySelector('.user-icon'); 
const menu = document.querySelector('.dropdown-menu');

if(userIcon){
	userIcon.addEventListener('click', () => { 
		menu.classList.toggle('open-menu');
	});
}
</script>
</body>
</html> 