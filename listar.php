<?php

	$query = 'SELECT id_contato, nome, email, telefone  
				FROM contato';

	$res = mysqli_query($link, $query);
	
	$numero_linhas = mysqli_num_rows($res);


	if($numero_linhas > 0){
		//echo '<br>retornou '.$numero_linhas.' registro(s)';

		while($linha = mysqli_fetch_array($res)){ //quando não tiver mais linhas essas atribuição será falsa e o loop termina

			$id_contato = $linha['id_contato'];
			$nome 		= $linha['nome'];
			$email 		= $linha['email'];
			$telefone 	= $linha['telefone'];

			$tab = '<tr>';
			$tab .= '<td> 
					<a href=""> Editar </a> | 
					<a href=""> Excluir </a> </td>';
			$tab .= '<td>' .$id_contato. '</td>';
			$tab .= '<td>' .$nome. 	'</td>';
			$tab .= '<td>' .$email.	'</td>';
			$tab .= '<td>' .$telefone.	'</td>';
			$tab .= '</tr>';

			$linha_formatada[]= $tab;
		}

	} else {
		echo 'Registro não retornado';
	}
	
	
	
?>

<br>

<table width="100%" border="1">

	<tr>
		<td>Ações</td>	
		<td>ID</td>
		<td>Nome</td>
		<td>Email</td>
		<td>Telefone</td>
	</tr>

	<?php 

		foreach ($linha_formatada as $key => $value) {
			echo $value;
		}

	?>


</table>

<br>