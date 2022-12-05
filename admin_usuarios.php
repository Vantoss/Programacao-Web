<?php require "admin.php";?>

<?php 

	if(!empty($_GET['pesquisa']))
	{
		$dados = $_GET['pesquisa'];
		$sqlUsuario = "SELECT * FROM usuarios WHERE nome LIKE '%$dados%' ORDER BY id";
	}
	else
	{
		$sqlUsuario = "SELECT * FROM usuarios ORDER BY id";
	}
	

	$queryUsuario = mysqli_query($dbconn, $sqlUsuario);

?>


<div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar (nome)" id="pesquisar">
        <button onclick="pesquisaDados()" class="btn btn-outline-primary">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  			<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
		</svg>
        </button>
    </div>
<div class="m-5">
	<table class="table table-bs">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">E-mail</th>
				<th scope="col">Senha</th>
				<th scope="col">CPF</th>
				<th scope="col">Contato</th>
				<th scope="col">Ação</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($dadosUsuario = mysqli_fetch_assoc($queryUsuario)) 
				{
					echo "<tr>";
					echo "<td>" . $dadosUsuario['id'] . "</td>";
					echo "<td>" . $dadosUsuario['nome'] . "</td>";
					echo "<td>" . $dadosUsuario['email'] . "</td>";
					echo "<td>" . $dadosUsuario['senha'] . "</td>";
					echo "<td>" . $dadosUsuario['CPF'] . "</td>";
					echo "<td>" . $dadosUsuario['contato'] . "</td>";
					echo "<td>
						<a class='btn btn-danger' href='deletarUsuario.php?id=$dadosUsuario[id]'>Excluir</a>
					</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>

<script>
	var pesquisa = document.getElementById('pesquisar');

	pesquisa.addEventListener("keydown", function(event) {
	if (event.key === "Enter") 
	{
		pesquisaDados();
	}
	});

	function pesquisaDados()
	{
		window.location = 'admin_usuarios.php?pesquisa='+pesquisa.value;
	}
</script>
