<?php

	//se id contato existir cria a variavel id contato, se for falso não faz nada
	//(condição) ? se verdade : se falso;
	(isset($_GET['id_pizzazz'])) ? $id_pizzazz = $_GET['id_pizzazz'] : false;

	$query = 'SELECT id_pizzazz,
				nome,
				recheios,
				borda,
				nota
			FROM pizzazz
			WHERE id_pizzazz = '.$id_pizzazz; 

	$res = mysqli_query($link, $query);

	while ($linha = mysqli_fetch_array($res)) {
		$id_pizzazz = $linha ['id_pizzazz'];
		$nome = $linha ['nome'];
		$recheios = $linha ['recheios'];
		$borda = $linha ['borda'];
		$nota = $linha ['nota'];
	}

?>

<form method="POST" action="acao_usuario.php">
	<!-- POST evita que os dados apareçam na url, oq seria uma falha de seguranaça-->
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_pizzazz" value="<?php echo $id_pizzazz; ?>">

<h2> Editar Pizza <?php echo $id_pizzazz ?>:</h2>

	<br> Nome: <br>
	<input type="text" name="nome" value="<?php echo $nome; ?>">

	<br> Recheios: <br>
	<input type="text" name="recheios" value="<?php echo $recheios; ?>">

	<br> Borda: <br>
	<input type="text" name="borda" value="<?php echo $borda; ?>">

	<br> Nota: <br>
	<input type="text" name="nota" value="<?php echo $nota; ?>">

	<br> <br>
	<input type="submit" name="botao" value="Editar"> 

</form>