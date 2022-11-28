<?php require "admin.php";?>

<?php 

	$sqlUsuario = "SELECT * FROM usuarios ORDER BY id";

	$queryUsuario = mysqli_query($dbconn, $sqlUsuario);

?>

<div style="overflow: scroll;">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">E-mail</th>
				<th scope="col">Senha</th>
				<th scope="col">CPF</th>
				<th scope="col">Contato</th>
				<th scope="col">Excluir</th>
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
					echo "<tr>";
				}
			?>
		</tbody>
	</table>
</div>