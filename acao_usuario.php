<?php 

	require_once('conexao.php'); //como se todo o código do arquivo estivesse aqui, então todas as variaveis dele são utilizaveis, visiveis aqui

	$conteudo_recebido = $_POST;

	//print_r($conteudo_recebido);

	$acao = $conteudo_recebido['acao'];

	switch($acao){
		case 'inserir': 
			$nome = $conteudo_recebido['nome'];
			$email = $conteudo_recebido['email'];
			$telefone = $conteudo_recebido['telefone'];

			$query = 'INSERT INTO contato (nome, email, telefone) 
							VALUES("'.$nome.'","'.$email.'","'.$telefone.'")';

			$res = mysqli_query($query, $link) or die(mysqli_error()); //true ou false

			//echo $query;
			//die;

		break;

		case 'editar': 

		break;

		case 'excluir': 

		break;
		
		default:
			echo 'caiu no default';
		break;
	}

	//depois de tudo carregado, volta pro index. o heador não tranca execução de nada, mesmo de linhas após ele.
	header('Location: index.php?pag=inserir&status=ok'); 
	exit; //encerra a execução do arquivo

	//die;
?>