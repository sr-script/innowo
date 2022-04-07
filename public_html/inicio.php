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
	<link  rel="icon"   href="images/favicon.png" type="image/png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="css/style.css" /> 
	<title>Innowo</title>
</head>
<body>
	<header><h2>[Innowo]</h2></header>
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
		<h2>[Innowo]</h2>		
	</nav>
	<div id="main">
		<scroll-container>

			<div class="box-footer">
                            
                      <textarea name="comentario" id="comentario" onkeypress="return validarn(event)" placeholder="Publica algo" class="form-control" cols="200" rows="3" required></textarea>
            <button type="submit" name="publicar" class="btn btn-primary btn-flat">Publicar</button>
             
                      <input type="file" accept="image/*" name="foto" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                      <label for="file-1">
                      	<i id="sube_foto">Sube una foto</i></label>
               
                  
                  </form>
                  
              </div>
	<div id="main1">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/daniel.html">
							<div id="fotodeperfil"><img src="images/perfil2.jpg"></div>
							<div id="nombre"><span>Daniel Vargas</span></div>
							<div id="usuario1"><p>@daniel_vargas</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca1.jpg"></div>
					</div>
					<!--<div id="cosas">
					<div id="ok">
						<div id="okimg"><img src="images/ok1.png">
							<div id="megusta"><span>Me Gusta</span></div>
						</div>
					</div>
					</div>-->
				</div>
			</div>
			</div>
			<div id="main2">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/ingrid.html">
							<div id="fotodeperfil"><img src="images/ingrid.jpg"></div>
							<div id="nombre"><span>Ingrid Vanessa</span></div>
							<div id="usuario1"><p>@vane_san</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca2.jpg"></div>
					</div>
				</div>
			</div>
			</div>
			<div id="main1">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/isela.html">
							<div id="fotodeperfil"><img src="images/isela1.jpg"></div>
							<div id="nombre"><span>Joanna Isela</span></div>
							<div id="usuario2"><p>@joanna_isela</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca1.jpg"></div>
					</div>
				</div>
			</div>
			</div>
			<div id="main2">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/cavifax.html">
							<div id="fotodeperfil"><img src="images/cavifax.jpg"></div>
							<div id="nombre"><span>Carlos Faz</span></div>
							<div id="usuariocavi"><p>@cavifax</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca2.jpg"></div>
					</div>
				</div>
			</div>
			</div>
			<div id="main2">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/gael.html">
							<div id="fotodeperfil"><img src="images/mariscos.jpg"></div>
							<div id="nombre"><span>Damián Briseño</span></div>
							<div id="usuariomari"><p>@el_mariscos</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>la vida es una larga escalera, y cuando llegas a el escalón en el cual cumpliste tus sueños, no te detengas, tu sigue, por que será un camino que disfrutarás o no se man algo así XDDDDDDDDDDD
						</span>
						<div id="imagen"><img src="images/vaca2.jpg"></div>
					</div>
				</div>
			</div>
			</div>
			<div id="main2">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/emilio.html">
							<div id="fotodeperfil"><img src="images/emilio.jpg"></div>
							<div id="nombre"><span>Jose Emilio Hernandez Huerta</span></div>
							<div id="usuarioemo"><p>@emolio</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca2.jpg"></div>
					</div>
				</div>
			</div>
			</div>
			<div id="main2">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/yisus.html">
							<div id="fotodeperfil"><img src="images/yisus.jpg"></div>
							<div id="nombre"><span>Jesus Melchor</span></div>
							<div id="usuarioyisus"><p>@Yisus</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca2.jpg"></div>
					</div>
				</div>
			</div>
			</div>
			<div id="main2">
	<div id="pub">
					<div id="usuario">
						<a href="usuarios/emiliano.html">
							<div id="fotodeperfil"><img src="images/emiliano.jpg"></div>
							<div id="nombre"><span>Josue Emiliano</span></div>
							<div id="usuarioemi"><p>@xheropro</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca2.jpg"></div>
					</div>
				</div>
			</div>
			</div>
			<div id="main2">
	<div id="pub">
					<div id="usuario">
						<a href="#">
							<div id="fotodeperfil"><img src="images/emilio.jpg"></div>
							<div id="nombre"><span>Jose Emilio Hernandez Huerta</span></div>
							<div id="usuarioemo"><p>@emolio</p></div>
						</a>
					</div>
					<div id="publicacion">
						<div id="texto"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</span>
						<div id="imagen"><img src="images/vaca2.jpg"></div>
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
					  <div class="sidebar-box">
    <select class="styled-select">
    <option>Tendencias</option>
    <option>Noticias</option>
    <option>Paginas</option>
    <option>Grupos</option>
    <option>En vivo</option>
    </select></div>


			<a href="#">
				<div class="icon"><!--<img src="images/ok.png"> --></div>
				<div class="title">
				<div class="puesto"> <p>1| Tendencias</p>
				</div>
				<span>#FelizViernes</span></div>
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
				<span>#TaChendoFrio</span></div>
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
								<span>#MaestraPongame10!!</span></div>
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
</div>
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
					</div>

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
					</div>
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
						<a href="profile.php">
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
	<footer>
		<h2>Creado por Daniel Vargas</h2>
		<h4>Innowo© 2021</h4>
	</footer>
</div>
<?php endif; ?>
</body>
</html>