<?php

	$query = 'SELECT id_pizzazz, nome, recheios, borda, nota, id_restaurante  
				FROM pizzazz';

	$res = mysqli_query($link, $query);
	
	$numero_linhas = mysqli_num_rows($res);


	if($numero_linhas > 0){
		//echo '<br>retornou '.$numero_linhas.' registro(s)';
		while($linha = mysqli_fetch_array($res)){ //quando não tiver mais linhas essas atribuição será falsa e o loop termina
			$id_pizzazz = $linha['id_pizzazz'];
			$nome 		= $linha['nome'];
			$recheios 	= $linha['recheios'];
			$borda 		= $linha['borda'];
			$nota 		= $linha['nota'];
			$id_restaurante = $linha['id_restaurante'];



			$tab = '<tr>';
			$tab .= '<td> 
						<a href="index.php?pag=editarpiz&id_pizzazz='.$id_pizzazz.'"> Editar </a> | 
						<a href="acao_usuario.php?acao=excluir&id_pizzazz='.$id_pizzazz.'"> Excluir </a> 

					</td>';
			$tab .= '<td>' .$id_pizzazz. '</td>';
			$tab .= '<td>' .$nome. 	'</td>';
			$tab .= '<td>' .$recheios.	'</td>';
			$tab .= '<td>' .$borda.	'</td>';
			$tab .= '<td>' .$nota.	'</td>';
			$tab .= '<td>' .$id_restaurante.'</td>';
			$tab .= '</tr>';

			$linha_formatada[]= $tab;
		}

	} else {
		echo 'Registro não retornado';
	}
	
	$query = 'SELECT id_restaurante, nome, endereco, telefone FROM restaurantes';
	$res = mysqli_query($link, $query);
	$numero_linhas = mysqli_num_rows($res);
	
	if($numero_linhas > 0){
		//echo '<br>retornou '.$numero_linhas.' registro(s)';
		while($linha = mysqli_fetch_array($res)){ //quando não tiver mais linhas essas atribuição será falsa e o loop termina
			$id_restaurante = $linha['id_restaurante'];
			$nome 		= $linha['nome'];
			$endereco 	= $linha['endereco'];
			$telefone 	= $linha['telefone'];

			$tab = '<tr>';
			$tab .= '<td> 
						<a href="index.php?pag=editarres&id_restaurante='.$id_restaurante.'"> Editar </a> | 
						<a href="acao_usuario.php?acao=excluirRes&id_restaurante='.$id_restaurante.'"> Excluir </a> 
					</td>';
			$tab .= '<td>' .$id_restaurante. '</td>';
			$tab .= '<td>' .$nome. 	'</td>';
			$tab .= '<td>' .$endereco.	'</td>';
			$tab .= '<td>' .$telefone.	'</td>';
			$tab .= '</tr>';

			$linhaRes_formatada[]= $tab;
		}

	} else {
		echo 'Registro não retornado';
	}
	
?>

<br>

<table width="100%" border="1" class="lista">

	<tr>
		<td>Ações</td>	
		<td>ID</td>
		<td>Nome</td>
		<td>Recheios</td>
		<td>Borda</td>
		<td>Nota (1-10)</td>
		<td>Restaurante</td>
	</tr>

	<?php 
		foreach ($linha_formatada as $key => $value) {
			echo $value;
		}
	?>
</table>

	<br>

<table width="100%" border="1" class="lista">
	<tr>
		<td>Ações</td>	
		<td>ID</td>
		<td>Nome</td>
		<td>Endereco</td>
		<td>Telefone</td>

	</tr>

	<?php

		foreach ($linhaRes_formatada as $key => $value) {
			echo $value;
		}
	?>
</table>

<br>