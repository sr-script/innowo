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

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<link  rel="icon"   href="images/favicon.png" type="image/png" />
     <link rel="stylesheet" type="text/css" href="css/imagenes.css" /> 
	<title>Linkowo</title>
</head>
<body>
	<nav>
		<ul class="menu_list">
			<li class="list_item"><div id="menu"><img src="images/inicio.png"></div><a href="inicio.php" class="link">Inicio</a></li>
			<li class="list_item"><div id="menu"><img src="images/videos.png"></div><a href="videos.php" class="link">Videos</a></li>
			<li class="list_item"><div id="menu"><img src="images/imagenes.png"></div><a href="imagenes.php" class="link">Imagenes</a></li>
			<li class="list_item"><div id="menu"><img src="images/musica.png"></div><a href="musica.html" class="link">Musica</a></li>
			<li class="list_item"><div id="menu"><img src="images/plazas.png"></div><a href="#" class="link">Plazas</a></li>
		</ul>
		<div class="box">   
		<input type="text" name="search" class="src" placeholder="Buscar..." autocomplete="off">
		</div>
		<h2>Linkowo</h2>		
	</nav>
	<div id="main">
		<scroll-container>
	<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/cavifax.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>La libertad no es más que la oportunidad de mejorar
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
		</div>
			<div id="main2">
	<div id="pub">
		<div class="items">
		<img src="images/goku.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span> Nada ocurre a no ser que primero soñemos
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>
			
			<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/af.jpg" class="item-img1">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Es mejor viajar bien que llegar
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>

			<div id="main2">
	<div id="pub">
		<div class="items">
		<img src="images/among.jpg" class="item-img1">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Nadie puede herirme sin mi permiso
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>

			<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/k.jpg" class="item-img1">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>

			<div id="main2">
	<div id="pub">
		<div class="items">
		<img src="images/m.jpg" class="item-img1">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			</div>

			<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/tux.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
		</div>

			<div id="main2">
			<div id="pub">
		<div class="items">
		<img src="images/s.png" class="item-img1">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Secretaria de Salud</span></div>
							<div id="usuario1"><p>@SSalud_mx</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Recuerda usar cubrebocas antes de salir de casa.
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			</div>

			<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/cavifax.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
		</div>
			<div id="main2">
	<div id="pub">
		<div class="items">
		<img src="images/goku.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>

			<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/cavifax.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
		</div>
			<div id="main2">
	<div id="pub">
		<div class="items">
		<img src="images/goku.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>

			<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/cavifax.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
		</div>
			<div id="main2">
	<div id="pub">
		<div class="items">
		<img src="images/goku.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>

			<div id="main1">
	<div id="pub">
		<div class="items">
		<img src="images/cavifax.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
		</div>
			<div id="main2">
	<div id="pub">
		<div class="items">
		<img src="images/goku.jpg" class="item-img">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Murió Cavifax :c
						</span>
						<!--<div id="video"><video width="520" height="300" autoplay controls><source src="videos/push.mp4" type="video/mp4"></video>
						</div>-->
					</div>
				</div>
			</div>
			</div>
			
			</div>
			</div>
			</div>
			</div>
		</scroll-container>
	</div>
	<section id="contenido">
		<article>

			<scroll-container>
			<div id="menu-items">
			<div class="item">
				<div class="item separator">

					</div>
				<div id="tendencias">
					<div id="photo"><img src="images/video1.png"></div>
					<div id="name"><span>Categorias</span>
				</div>
			<a href="#">
				<div class="icon"><!--<img src="images/ok.png"> --></div>
				<div class="title">
				<div class="puesto"> <p>1| </p>
				</div>
				<span>Popular</span></div>
			</a>
			</div>
				

					<div class="item separator">

					</div>
					<div class="item">
						<a href="#">
							<div class="icon"> <!--<img src="images/ok.png">--></div>
							<div class="title">
								<div class="puesto"> <p>2| </p>
				</div>
				<span>Seguidos</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>3| </p>
				</div>
								<span>Aprendizaje</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="FestivalDelTomate.html">
							<div class="icon"> <!--<img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>4| </p>
				</div>
								<span>Cocina</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><!--<img src="images/ok.png">--></div>
							<div class="title">
								<div class="puesto"> <p>5| </p>
				</div>
								<span>Videojuegos</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>6| </p>
				</div>
								<span>Entretenimiento</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>7| </p>
				</div>
								<span>Informativos</span></div>
						</a>
					</div>
					<div class="item separator">

						<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>8| </p>
				</div>
								<span>Tutoriales</span></div>
						</a>
					</div>
					<div class="item separator">

						<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>9| </p>
				</div>
								<span>Peliculas y series</span></div>
						</a>
					</div>
					<div class="item separator">

						<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>10| </p>
				</div>
								<span>Para tí</span></div>
						</a>
					</div>
					<div class="item separator">
						<div class="item separator">

			</scroll-container>
		</article>
	</section>
	
	<!-- header -->
	<aside class="contenedor">
		
		<div id="sidemenu" class="sidemenu">
			<div id="header">
				<div id="title"></div>
				<scroll-container>
				<!-- profile -->
				<div id="profile">
					<div id="photo"><img src="images/perfil3.jpg" ></div>

					<?php if(!empty($user)): ?>
					<div id="name"><span> <?= $user['name']; ?><span> <?= $user['lastname']; ?></span></div>
					<div id="codigo"><span> <?= $user['user']; ?></span></div>
				</div>

				<!-- Items -->
				
				<div id="menu-items">
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/perfil.png"></div>
							<div class="title"><span>Perfil</span></div>
						</a>
					</div>

					<div class="item separator">

					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/amigos.png"></div>
							<div class="title"><span>Amigos</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/chat.png"></div>
							<div class="title"><span>Chat</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/grupos.png"></div>
							<div class="title"><span>Plazas</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/notificaciones.png"></div>
							<div class="title"><span>Notificaciones</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/video.png"></div>
							<div class="title"><span>Videos</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/fotos.png"></div>
							<div class="title"><span>Imagenes</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/juegos.png"></div>
							<div class="title"><span>Juegos</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/favoritos.png"></div>
							<div class="title"><span>Favoritos</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/configuracion.png"></div>
							<div class="title"><span>Configuración</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><img src="images/logout.png"></div>
							<div class="title"><span>Cerrar Sesión</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
				</div>
			</div>
		</div>
		</scroll-container>
	</aside>
	<footer>
		<h2>Creado por Daniel Vargas</h2>
		<h4>Innowo© 2021</h4>
	</footer>
</div>
<?php endif; ?>
</body>
</html>