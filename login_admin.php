<?php require 'functions.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login_admin.css">
    <title>Login Admin</title>

</head>
<body>

    <?php
        if (isset($_POST['send_admin'])) {
            loginAdmin($dbconn, $_POST['login'], $_POST['senha']);
        }
    ?>

    <div class="box">
    <h1>Login</h1>
    <form action="" method="post">
        <div>
            <label>Login</label>
            <input type="text" name="login" id="" required>
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="senha" id="" required>
        </div>
        <input type="submit" name="send_admin" value="Logar">
    </form>
    </div>

</body>
</html>