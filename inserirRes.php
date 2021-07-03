<form method="POST" action="acao_usuario.php">
	<!-- POST evita que os dados apareçam na url, oq seria uma falha de seguranaça-->
	<input type="hidden" name="acao" value="inserirRes">

<h2> Adicionar novo restaurante:</h2>

	<br> Título: <br>
	<input type="text" name="nome">

	<br> Endereco: <br>
	<input type="text" name="endereco">

	<br> Telefone: <br>
	<input type="text" name="telefone">

	<br>
	<input type="submit" name="botao" value="Enviar"> 

	<?php 
		if (isset($_GET['status']) and !empty($_GET['status'] and $_GET['status'] == 'ok'))
			echo '&nbspFormulario enviado com sucesso<br><br>';
	?>

</form>