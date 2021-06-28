<?php 

	
	$conteudo_recebido = $_POST;

	//print_r($conteudo_recebido);

	$acao = $conteudo_recebido['acao'];

	switch($acao){
		case 'inserir': 
			$nome = $conteudo_recebido['nome'];
			$email = $conteudo_recebido['email'];
			$telefone = $conteudo_recebido['telefone'];

			//echo 'nome: ', $nome;
			//echo '<br>email: ', $email;
			//echo '<br>telefone: ', $telefone;

			//proxima aula -> inserir o registro aqui

		break;

		case 'editar': 

		break;

		case 'excluir': 

		break;
		
		default:
			//echo 'caiu no default';
		break;
	}

	//depois de tudo carregado, volta pro index. o heador não tranca execução de nada, mesmo de linhas após ele.
	header('Location: index.php?pag=inserir&status=ok'); 
	//exit; //encerra a execução do arquivo

	//die;

?>