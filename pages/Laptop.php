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
    <link rel="shortcut icon" href="../access/img/Logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/stylebusquedapag.css">
	<link rel="stylesheet" href="../css/stylemenu.css">
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
    				<a href="../pages/Registro.php">Iniciar Sesión</a>
			</div>
		</nav>					
					<?php endif; ?>
	</header>
		<div class="containerdos">
			<input type="text" placeholder="Buscar...">
			<button><i class="fa-solid fa-magnifying-glass"></i></button>
		</div>
<main id="blog">
    <h1><a href="Computadora.html">Computadora</a></h1>

    <h2>Laptop</h2>

    <div class="producto">
        <img src="../access/img/product-1.png" alt="Laptop">

        <div class="info">
            <h2>Precio: $360.500 PE</h2>
            <h3>INTEL Core i9 10th GEN</h3>
            <h3>16GB RAM 3200 MHz</h3>
            <h3>Disco Sólido 500GB Kingston</h3>
            <h3>RTX 3060 Ti</h3>
			<br>
			<button class="button-add">Añadir al carrito</button>
			
    <h2>DESCRIPCIÓN</h2>

    <p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique architecto accusantium doloribus reiciendis ratione dolor fugiat aliquid tempore neque ea ab omnis minus reprehenderit, adipisci praesentium eos eum aliquam?
Error minima earum assumenda tempore doloribus tempora sequi voluptatem dignissimos repellat autem dolorum dolores odit, aspernatur quae? Architecto cumque temporibus aliquam incidunt consequuntur deleniti maiores corporis officiis, quisquam enim ipsam.
Fugiat, adipisci recusandae. Cum, corrupti quaerat suscipit ipsum blanditiis inventore sapiente eveniet amet dicta! Animi recusandae, unde repudiandae officiis, omnis quasi, tempore et cumque quaerat aliquid dolor quae pariatur asperiores!
Reiciendis eius eligendi perferendis, voluptatum tenetur architecto deleniti asperiores earum voluptas, optio animi atque fuga quod possimus esse magnam cumque porro suscipit non. Repellat distinctio beatae saepe magnam accusantium? Iure.
Delectus quo hic, cumque quisquam accusamus quos quas! Impedit ex quae deserunt. Itaque possimus nobis sed natus ex ipsam repudiandae aliquam sint adipisci iste, reiciendis perspiciatis, laborum, recusandae unde quam.
Corporis similique qui illum hic unde laboriosam autem exercitationem, voluptate reiciendis rerum cupiditate culpa eveniet rem dolorum facere velit quia obcaecati amet praesentium dolore! Provident a voluptate placeat amet natus.
Debitis quaerat vero totam alias. Perspiciatis, hic velit! Iste tempora id accusamus esse itaque deleniti doloremque dolorum vitae, dignissimos nemo aperiam! Et harum cum sunt ipsum inventore corporis facilis voluptatem!
    </p>
        </div>
    </div>
	<h2>Forma de Pago</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>Perfil del vendedor</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>Comentarios</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>x</h2>
	<h2>x</h2>
		<h2>COSAS QUE TE INTERECEN</H2>
    <body>
		<br>
        <div class="page-content">
            <div class="card">
                <img src="../access/img/product-4.jpg" alt="Avatar" style="width:300px">
                    <div class="container">
                        <h4><b>Rack Grande Estilo Industrial</b></h4>
                            <div class="v">
                                <p>$33.869</p>
                            </div>
                            <button class="button-add">Añadir al carrito</button>
                    </div>
            </div> 
            <div class="card">
                <img src="../access/img/product-3.jpg" alt="Avatar" style="width:300px">
                    <div class="container">
                        <h4><b>Sofa Esquinero con Puff Jecay</b></h4>
                            <div class="v">
                                <p>$84.599</p>
                            </div>
                            <button class="button-add">Añadir al carrito</button>
                    </div>
            </div> 
            <div class="card">
                <img src="../access/img/product-2.jpg" alt="Avatar" style="width:300px">
                    <div class="container">
                        <h4><b>PC GAMER GM CARBIDE I5 GF1660TI</b></h4>
                            <div class="v">
                                <p>$422.749</p>
                            </div>
                            <button class="button-add">Añadir al carrito</button>
                    </div>
            </div>

            <div class="card">
                <img src="../access/img/product-1.png" alt="Avatar" style="width:300px">
                    <div class="container">
                        <h4><b>Laptop gamer Legion 7i 6ta Gen</b></h4>
                            <div class="v">
                                <p>$857.999</p>
                            </div>
                            <button class="button-add">Añadir al carrito</button>
                    </div>
            </div>
        </div>
    </body>

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