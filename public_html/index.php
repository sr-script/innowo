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
	<title>Innowo</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php if(!empty($user)): ?>
		<br>Bienvenido, <?= $user['email']; ?>
		<br>Tu sesión está abierta
		<a href="logout.php">
		Cerrar Sesión
	</a>
		<?php else: ?>

	<h1>Inicia sesión o registrate</h1>

	<a href="login.php">Inicia sesión</a> ó
	<a href="signup.php">Registrate</a>
<?php endif; ?>
</body>
</html>