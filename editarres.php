<?php

	//se id contato existir cria a variavel id contato, se for falso não faz nada
	//(condição) ? se verdade : se falso;
	(isset($_GET['id_restaurante'])) ? $id_restaurante = $_GET['id_restaurante'] : false;

	$query = 'SELECT id_restaurante,
				nome,
				endereco,
				telefone
			FROM restaurantes
			WHERE id_restaurante = '.$id_restaurante; 

	$res = mysqli_query($link, $query);

	while ($linha = mysqli_fetch_array($res)) {
		$id_restaurante = $linha ['id_restaurante'];
		$nome = $linha ['nome'];
		$endereco = $linha ['endereco'];
		$telefone = $linha ['telefone'];
	}

?>

<form method="POST" action="acao_usuario.php">
	<!-- POST evita que os dados apareçam na url, oq seria uma falha de seguranaça-->
	<input type="hidden" name="acao" value="editarRes">
	<input type="hidden" name="id_restaurante" value="<?php echo $id_restaurante; ?>">

<h2> Editar Restaurante <?php echo $id_restaurante ?>:</h2>

	<br> Nome: <br>
	<input type="text" name="nome" value="<?php echo $nome; ?>">

	<br> Endereco: <br>
	<input type="text" name="endereco" value="<?php echo $endereco; ?>">

	<br> Telefone: <br>
	<input type="text" name="telefone" value="<?php echo $telefone; ?>">

	<br> <br>
	<input type="submit" name="botao" value="Editar"> 

</form>