<form method="POST" action="acao_usuario.php">
	<!-- POST evita que os dados apareçam na url, oq seria uma falha de seguranaça-->
	<input type="hidden" name="acao" value="inserir">

<h2> Adicionar nova pizzazz:</h2>

	<br> Título: <br>
	<input type="text" name="nome">

	<br> Recheio: <br>
	<input type="text" name="recheios">

	<br> Borda: <br>
	<input type="text" name="borda">

	<br> Nota (1-10): <br>
	<input type="text" name="nota">

	<br> <br>
	<input type="submit" name="botao" value="Enviar"> 

	<?php 
		if (isset($_GET['status']) and !empty($_GET['status'] and $_GET['status'] == 'ok'))
			echo '&nbspFormulario enviado com sucesso<br><br>';
	?>

</form>