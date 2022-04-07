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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daniel Vargas</title>
	<link rel="stylesheet" type="text/css" href="css/usuario.css">
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
		<ul class="menu_list">
			<li class="list_item"><div id="menu"><img src="images/inicio.png"></div><a href="inicio.php" class="link">Inicio</a></li>
			<li class="list_item"><div id="menu"><img src="images/videos.png"></div><a href="video.html" class="link">Videos</a></li>
			<li class="list_item"><div id="menu"><img src="images/imagenes.png"></div><a href="#" class="link">Imagenes</a></li>
			<li class="list_item"><div id="menu"><img src="images/musica.png"></div><a href="#" class="link">Musica</a></li>
			<li class="list_item"><div id="menu"><img src="images/plazas.png"></div><a href="#" class="link">Plazas</a></li>
		</ul>
		<div class="box">   
		<input type="text" name="search" class="src" placeholder="Buscar..." autocomplete="off">
		</div>
		<h2>Linkowo</h2>		
	</nav>
		<section id="contenido">
		<article>

			<scroll-container>
			<div id="menu-items">
			<div class="item">
				<div class="item separator">

					</div>
				<div id="tendencias">
					<div id="photo"><img src="images/fire2.png"></div>
					<div id="name"><span>Tendencias</span>
				</div>
			<a href="#">
				<div class="icon"><!--<img src="images/ok.png"> --></div>
				<div class="title">
				<div class="puesto"> <p>1| Tendencias</p>
				</div>
				<span>#FelizJueves</span></div>
			</a>
			</div>
				

					<div class="item separator">

					</div>
					<div class="item">
						<a href="#">
							<div class="icon"> <!--<img src="images/ok.png">--></div>
							<div class="title">
								<div class="puesto"> <p>2| Tendencias</p>
				</div>
				<span>#AbeloAmloRaRaRa</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>3| Tendencias</p>
				</div>
								<span>#AbeloAmloRaRaRa</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="FestivalDelTomate.html">
							<div class="icon"> <!--<img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>4| Tendencias</p>
				</div>
								<span>#FestivalDelTomate</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><!--<img src="images/ok.png">--></div>
							<div class="title">
								<div class="puesto"> <p>5| Tendencias</p>
				</div>
								<span>#DiaDelArroz</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"><!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>6| Tendencias</p>
				</div>
								<span>#TheGame</span></div>
						</a>
					</div>
					<div class="item separator">
						
					</div>
					<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>7| Tendencias</p>
				</div>
								<span>#Colombia</span></div>
						</a>
					</div>
					<div class="item separator">

						<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>8| Tendencias</p>
				</div>
								<span>#LuisMiguel</span></div>
						</a>
					</div>
					<div class="item separator">

						<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>9| Tendencias</p>
				</div>
								<span>#Gaturro</span></div>
						</a>
					</div>
					<div class="item separator">

						<div class="item">
						<a href="#">
							<div class="icon"> <!-- <img src="images/ok.png"> --></div>
							<div class="title">
								<div class="puesto"> <p>10| Tendencias</p>
				</div>
								<span>#Daniel</span></div>
						</a>
					</div>
					<div class="item separator">
						<div class="item separator">

			</scroll-container>
		</article>
	</section>
<section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" style="background-image: url('images/portada.jpg');">
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="images/perfil2.jpg" alt="img">
                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i> 
                    <span>Cambiar foto</span>
                   <input type="file" id="btn-file">
                </a>
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario"><?= $user['name']; ?> <?= $user['lastname']; ?></h4>
                <span class="usu"><?= $user['user']; ?></span>
                <p class="bio-usuario">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <ul class="lista-perfil">
                    <li>35 Seguidores</li>
                    <li>7 Seguidos</li>
                    <li>32 Publicaciones</li>
                </ul>
            </div>
            <div class="opcciones-perfil">
                <button type="">Cambiar portada</button>
                <button type=""><i class="fas fa-wrench"></i></button>
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="#" title=""><i class="icono-perfil fas fa-bullhorn"></i> Publicaciones</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i> Amigos 43</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>
            </ul>
        </div>
    </div>
</section>


	<aside class="contenedor">
		
		<div id="sidemenu" class="sidemenu">
			<div id="header">
				<div id="title"></div>
				<scroll-container>
				<!-- profile -->
				<div id="profile">
					<div id="photo"><img src="images/perfil2.jpg" ></div>

					<div id="name"><span><?= $user['name']; ?> <?= $user['lastname']; ?></span></div>
					<div id="codigo"><span><?= $user['user']; ?></span></div>
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
						<a href="logout.php">
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
</body>

</html
></body>
</html>