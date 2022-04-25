<?php

session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /innowo');
  }

  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: inicio.php");
    } else {
      $message = 'La contraseña o el usuario que ingresó son incorrectos, por favor intente de nuevo';
    }
  }

?>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   -->
	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    
<!--	<div id="login">
	<h1>Inicio de Sesión</h1>

	<form action="login.php" method="post">
		<input type="text" name="email" placeholder="Correo Electronico">
		<input type="password" name="password" placeholder="Contraseña">
		<input type="submit" name="Send" value="Ingresar">
	</form>
	<br>
	<span>Ó <a href="signup.php">Registrate</a></span>
</div>
</body>
</html>
  -->