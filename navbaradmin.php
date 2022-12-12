<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">Página Administrativa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários admin
          </a>
          
          <ul class="dropdown-menu">
          <?php if($_SESSION['adminMaster']) { echo ' 
            <li><a class="dropdown-item" href="admin_usuariosadmin.php">Ver</a></li>
            <li><a class="dropdown-item" href="admin_cadastro.php">Cadastrar</a></li>
          </ul>
        </li>
        '; } else {
          echo '

          <li><a class="dropdown-item" href="admin.php">Acesso negado</a></li>
            </ul>
        </li>
          '; }
         ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin_usuarios.php">Ver</a></li>
          </ul>
        </li>
      </ul>
      <a class='btn btn-outline-light' href='logout.php'>Deslogar</a>   
    </div>
  </div>
</nav>