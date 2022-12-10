<?php require "admin.php";?>

<?php
    if (isset($_POST['inserir'])) {
    		$master = isset($_POST['master']) ? 1 : 0;
        cadastroAdmin($dbconn, $_POST['login_cad'], $_POST['senha_cad'], $master);
    }
?>

<form action="" method="post" class="form_cadastro">
	<p class="text-center fs-5">Cadastro de Administrador</p>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="login_cad" id="inputEmail3" required>
      <div class="valid-feedback">
      	aaaa
    	</div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="senha_cad" id="inputPassword3" required>
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="master" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Admin Master
      </label>
    </div>
  </div>
  <div class="col-12 mt-3">
    <button type="submit" name="inserir" class="btn btn-primary">Cadastrar</button>
  </div>
  <div class="col-12 mt-3">
  	<?php echo $_SESSION['msgCad']; ?>
  </div>
</form>

