<?php 
session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password, name, lastname, user FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
  }
}
?>
<?php 

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['user'])) {
	$sql = "INSERT INTO users (email, password, name, lastname, user) VALUES (:email, :password, :name, :lastname, :user)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':email',$_POST['email']);
	$stmt->bindParam(':name',$_POST['name']);
	$stmt->bindParam(':lastname',$_POST['lastname']);
	$stmt->bindParam(':user',$_POST['user']);
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password',$password);

	if ($stmt->execute()) {
		$message = 'Tu cuenta ha sido creada exitosamente :D'; 
	} else {
		$message = 'Ha ocurrido un error, intenta registrarte mas tarde :c';
	}
}

?>

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
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bevan&display=swap');
	</style>
</head>
<body class="container-X-Small">

	<?php if(!empty($user)): ?>
		
		<br>Bienvenido, <?= $user['email']; ?>
		<br>Tu sesión está abierta
		<a href="logout.php">
			Cerrar Sesión
		</a>
	<?php else: ?>
		<header id="a">
			<img id="logowo" src="/public_html/images/zzzz/logoiinowo.svg" width="90px" alt="">
			<h1 id="innowo">INNOWO</h1>
			<button class="btn-bonitos" id="btn-abrir-popup" class="btn-abrir-popup" href="loging.php">Inicia sesión</button>
			<button class="btn-bonitos" id="btn-abrir-popupss" class="btn-abrir-popupss" href="singup.php">Registrate</button>
			<!--
			 <a href="#">Inicia sesión</a>
			<a href="signup.php">Registrate</a>
			-->
			<img src="/public_html/images/zzzz/angle-down-solid.svg" alt="" width="30px">
		</header>
		<nav>
			<ul>
				<li><img class="submenunav" src="/public_html//images/zzzz/shirt-solid.svg" alt=""><a class="submenu" href="#">Merch</a></li>
				<li><img class="submenunav" src="/public_html//images/zzzz/radio.png" alt=""><a class="submenu" href="#">Radio</a></li>
				<li><img class="submenunav" src="/public_html//images/zzzz/youtube-brands.svg" alt=""><a class="submenu" href="#">Youtube</a></li>
				<li><img class="submenunav" src="/public_html//images/zzzz/newspaper-solid.svg" alt=""><a class="submenu" href="#">Releases</a></li>
				<li><img class="submenunav" src="/public_html//images/zzzz/qrcode-solid.svg" alt=""><a class="submenu" href="#">Generar QR</a></li>
			</ul>
		</nav>
		<section>
			<article class="fondo-degra">
				InnOwO es una red social única la cual ofrece múltiples herramientas para todo el publico desde ayudas para estudiantes como un generador de fotografiaras por códigos QR, entrega a domicilio ofrecida por nuestra propia pagina, un innovador sistema de personalización de perfil con las “pizarras”, también nos promocionamos en la radio local y en nuestra pagina de Youtube y dentro de InnOwO brindamos asesorías generales en temas vanguardistas.
			</article>
			<article class="fondo-degra">
				<h1>¿QUÉ SON LAS PIZARRAS?</h1>
				La pizarra es nuestra forma personalizar nuestro perfil o el de nuestros amigos con frases o imágenes positivas, las pizarras son 100% seguras el usuario puede configurar su perfil para elegir si algun amigo puede editar su pizarra y antes de publicar cualquier cosa se le notifica al usuario lo que sera publicado al igual que puede elegir una sola persona para editarlo o tenerlo privado.  
			</article>
		</section>
		<section>
			<article class="fondo-degra">CEO/FUNDADOR <img src="/public_html/images/zzzz/" alt=""></article>
			<article  class="fondo-degra">CO-FUNDADOR <img src="/public_html/images/zzzz/emilioowo.png" width="100px" alt=""></article>
			<article class="fondo-degra">DIRECTOR DE COMERCIAL <img src="/public_html/images/zzzz/" alt=""></article>
			<article class="fondo-degra">DIRECTOR DE SOPORTE Y DESARROLLO <img src="/public_html/images/zzzz/" alt=""></article>
			<article class="fondo-degra">DIRECTOR DE MARKETING <img src="/public_html/images/zzzz/Karlosowo.png" width="100px" alt=""></article>
			<article class="fondo-degra">DIRECTOR DE FINANZAS <img src="/public_html/images/zzzz/" alt=""></article>
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
			<a class="pata" id="cola" href="#">CONTACTANOS</a>
			<img class="pata" src="/public_html/images/zzzz/phone-solid.svg" width="30px" alt="">
			
		</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="/public_html/JS/popup.js"></script>
	<?php endif; ?>
</body>
</html>
