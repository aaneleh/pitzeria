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


	<br> Restaurante: <br>
	<select name="restaurante">

		<?php 
			$query = 'SELECT id_restaurante, nome FROM restaurantes';
			$res = mysqli_query($link, $query);
			$numero_linhas = mysqli_num_rows($res);

			$opcoes;

			if($numero_linhas > 0){
			
				while($linha = mysqli_fetch_array($res)){ 
					$id_restaurante = $linha['id_restaurante'];
					$nome 			= $linha['nome'];

					$linha = '<option value='.$id_restaurante.'> ['.$id_restaurante.'] '.$nome.'</option>';

					$opcoes[]= $linha;
					
				}
			} else {
				$opcoes = "<option value='null'>Nenhum Restaurante</option>";
			}

			foreach ($opcoes as $key => $value){
				echo $value;
			}


		?>


		<!--
		<option value="1" >Opcao 1</option>
		<option value="2" >Opcao 2</option>
		<option value="3" >Opcao 3</option>
	-->
	</select>


	<br> <br>
	<input type="submit" name="botao" value="Enviar"> 

	<?php 
		if (isset($_GET['status']) and !empty($_GET['status'] and $_GET['status'] == 'ok'))
			echo '&nbspFormulario enviado com sucesso<br><br>';
	?>

</form>