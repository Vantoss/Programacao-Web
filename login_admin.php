<?php require 'functions.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Login Admin</title>
</head>

<body class="text-center">

    <?php
        if (isset($_POST['send_admin'])) {
            loginAdmin($dbconn, $_POST['login'], $_POST['senha']);
        }
    ?>


    
<main class="form-signin">
  <form>
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="admin_login" placeholder="Login">
      <label for="admin_login">Usuário</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="admin_senha" placeholder="Senha">
      <label for="admin_senha">Senha</label>
    </div>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; Pizzaria ADS</p>
  </form>
</main>


    
  </body>
          

</body>
</html>