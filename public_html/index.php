<!DOCTYPE html>
<html>
<head>
	<title>Innowo</title>
	<html lang="es">
	<link rel="shortcut icon" href="/public_html/images/infinity.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="container-X-Small">

	<?php if(!empty($user)): ?>
		
		<br>Bienvenido, <?= $user['email']; ?>
		<br>Tu sesión está abierta
		<a href="logout.php">
			Cerrar Sesión
		</a>
	<?php else: ?>
		<header>
			<h1>Bienvenido a Un mundo de Maravillas</h1>
		</header>
		<nav >
			
			
			<button class="btn-bonitos" id="btn-abrir-popup" class="btn-abrir-popup" href="loging.php">Inicia sesión</button>
			<button class="btn-bonitos" id="btn-abrir-popupss" class="btn-abrir-popupss" href="singup.php">Registrate</button>
			<!--
			 <a href="#">Inicia sesión</a>
			<a href="signup.php">Registrate</a>
			-->
		</nav>
		<section>
			<article>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum in nulla hic vero, fuga quaerat deleniti, iste nemo dolorum ex quas, enim sapiente.
			</article>
			<article>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ducimus praesentium fuga magnam est repellat. Voluptatibus voluptates repudiandae atque hic veritatis, molestiae nisi earum quidem. Incidunt repellendus quae quod iure, laborum inventore! Iure dolorem exercitationem repudiandae sit unde tenetur assumenda deserunt magni dolore.
			</article>
		</section>
		
	 <div class="contenedor">
		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>Inicia Sesion</h3>
				<h4>y entra al futuro</h4>
				<form action="">
					<div class="contenedor-inputs">
						<form action="login.php" method="post">
							<input type="text" name="email" placeholder="Correo Electronico">
							<input type="password" name="password" placeholder="Contraseña">
							<input class="btn-submit" type="submit" name="Send" value="Ingresar">
						</form>
					</div>
					
				</form>
			</div>
		</div>
	 </div>
	 <div class="contenedorss">
		<div class="overlayss" id="overlayss">
			<div class="popupss" id="popupss">
				<a href="#" id="btn-cerrar-popupss" class="btn-cerrar-popupss"><i class="fas fa-times"></i></a>
				<h3>Registrate</h3>
				<h4>para poder descubrir un nuevo mundo</h4>
				<form action="">
					<div class="contenedor-inputsss">
						<form action="login.php" method="post">
							<input type="text" name="email" placeholder="Correo Electronico">
							<input type="password" name="password" placeholder="Contraseña">
							<input class="btn-submit" type="submit" name="Send" value="Ingresar">
						</form>
					</div>
					
				</form>
			</div>
		</div>
	 </div>
		
		<footer>
			<a href="https://github.com/sr-script/innowo0"><i class="fa fa-github" style="font-size:36px;color:black"></i></a>
			
			<a id="cola" href="#">Colaboradores</a>

		</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="/public_html/JS/popup.js"></script>
	<?php endif; ?>
</body>
</html>