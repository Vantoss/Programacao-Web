<?php require "admin.php";?>

<?php 

	$sqlAdmin = "SELECT * FROM admin ORDER BY id";

	$queryAdmin = mysqli_query($dbconn, $sqlAdmin);

?>

	<div class="m-5">
		<table class="table table-bs">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Login</th>
					<th scope="col">Senha</th>
					<th scope="col">Permissão</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php

					function isMaster($admin){
							
						if($admin == 1){
							return "Master";
						}

						return "Normal";
					}

					while ($dadosAdmin = mysqli_fetch_assoc($queryAdmin)) 
					{	
						echo "<tr>";
						echo "<td>" . $dadosAdmin['id'] . "</td>";
						echo "<td>" . $dadosAdmin['login'] . "</td>";
						echo "<td>" . $dadosAdmin['senha'] . "</td>";
						echo "<td>" . isMaster($dadosAdmin['master']) . "</td>";
						echo "<td>
							<a class='btn btn-danger' href='deletarAdmin.php?id=$dadosAdmin[id]'>Excluir</a>
						</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
