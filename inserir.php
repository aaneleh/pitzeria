<form method="POST" action="acao_usuario.php">
	<!-- POST evita que os dados apareçam na url, oq seria uma falha de seguranaça-->
	<input type="hidden" name="acao" value="inserir">


	<?php 
		if (isset($_GET['status']) and !empty($_GET['status'] and $_GET['status'] == 'ok'))
			echo 'Formulario enviado com sucesso<br><br>';
	?>

	
	Nome: <br>
	<input type="text" name="nome">

	<br>

	Email: <br>
	<input type="text" name="email">

	<br>

	Telefone: <br>
	<input type="text" name="telefone">

	<br>
	<input type="submit" name="botao" value="Enviar"> 

</form>