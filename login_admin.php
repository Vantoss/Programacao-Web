<?php require 'functions.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Login Admin</title>

    <style type="text/css">
        
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="text"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

        </style>

</head>

<body class="text-center">

    <?php
        if (isset($_POST['send_admin'])) {
            loginAdmin($dbconn, $_POST['login'], $_POST['senha']);
        }
    ?>


    
<main class="form-signin">
  <form action="" method="post">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="text" name="login" class="form-control" id="admin_login" placeholder="Login" required>
      <label for="admin_login">Usuário</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="admin_senha" placeholder="Senha" required>
      <label for="admin_senha">Senha</label>
    </div>
    </div>
    <?php echo $_SESSION['msg']; ?>
    <input class="w-100 btn btn-lg btn-primary" name="send_admin" type="submit" value="Entrar"></input>
    <p class="mt-5 mb-3 text-muted">&copy; Pizzaria ADS</p>
  </form>
</main>


    
  </body>
          

</body>
</html>