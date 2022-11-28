<?php require "admin.php";?>

<?php 

	$sqlAdmin = "SELECT * FROM admin ORDER BY id";

	$queryAdmin = mysqli_query($dbconn, $sqlAdmin);

?>

<div style="overflow: scroll;">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Login</th>
				<th scope="col">Senha</th>
				<th scope="col">Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($dadosAdmin = mysqli_fetch_assoc($queryAdmin)) 
				{
					echo "<tr>";
					echo "<td>" . $dadosAdmin['id'] . "</td>";
					echo "<td>" . $dadosAdmin['login'] . "</td>";
					echo "<td>" . $dadosAdmin['senha'] . "</td>";
					echo "<tr>";
				}
			?>
		</tbody>
	</table>
</div>