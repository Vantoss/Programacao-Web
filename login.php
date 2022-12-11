<?php require "loginUserFunc.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<header>
		<?php require "copiaecola.php";?>
	</header>
	<main>
		<div class="box">
			<h1 class="loginHeader">Login</h1>
			<p class="acesse">Acesse sua conta </p>
			<form action="" method="post" class="form">
				<label>Seu email:</label>
				<input type="email" name="email" class="emailsenha" required>
				<label>Sua senha:</label>
				<input type="password" name="senha" class="emailsenha" required>
				<a href="" class="esqueci">Esqueci a senha</a>
				<input type="submit" name="entrar" class="enviar" value="Entrar">
			</form>
			<p class="cadastro">Não tem uma conta ainda? <a href="Cad_Cliente.php">Crie uma.</a></p>
		</div>
	</main>
	<footer>
		<?php require "copiaecolafooter.php";?>
	</footer>
</body>
</html>