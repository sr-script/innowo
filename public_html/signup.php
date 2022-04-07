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
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarse</title>
</head>
<body>
	<?php if (!empty($message)): ?> 
		<p><?= $message ?></p>
	<?php endif; ?>

	
	<div id="signup">
		<h1>Registrarse</h1>
	<form action="signup.php" method="post">
		<input type="text" name="name" placeholder="Nombre">
		<span class="input-group-addon"></span>
		<input type="text" name="lastname" placeholder="Apellido">
		<input type="text" name="user" placeholder="Escribe tu usuario (que inicie con @)">
		<input type="text" name="email" placeholder="Correo Electronico">
		<input type="password" name="password" placeholder="Contraseña">
		<input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
		<input type="submit" name="Send" value="Registrarme">
	</form>
	<br>
	<span>Ó <a href="login.php">Inicia Sesión</a></span>
	<form action="index.html" method="post"></form>
</div>
</body>
</html>