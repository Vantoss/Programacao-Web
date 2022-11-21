<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login_admin.css">
    <title>Admin</title>

</head>
<body>
	<?php if ( isset($_SESSION['adminSession']) ) { ?>
		
		<!-- corpo da pagina -->

	<?php } else {
		header("login_admin.php");
	} ?>


</body>
</html>
