<?php


?>

<!DOCTYPE html>
<html>

<head>
	<title>Login-TRAVELERS</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Css/main.css">
</head>

<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="../Controller/RegistrarUsuario.php" method="POST">
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<button>Sign up</button>
			</form>
		</div>

		<div class="login">
			<form action="../Controller/UsuarioController.php" method="POST">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="text" id="Correo" name="Correo" placeholder="Correo" required="">
				<input type="password" id="Contrasena" name="Contrasena" placeholder="Contrasena" required="">
				<button>Log in</button>
			</form>
		</div>
	</div>
</body>

</html>