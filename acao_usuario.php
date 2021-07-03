<?php 

	require_once('conexao.php'); //como se todo o código do arquivo estivesse aqui, então todas as variaveis dele são utilizaveis, visiveis aqui

	$conteudo_recebido = $_POST;

	//print_r($conteudo_recebido);

	$acao = $conteudo_recebido['acao'];

	$pagina;

	switch($acao){
		case 'inserir': 
			$nome = $conteudo_recebido['nome'];
			$recheios = $conteudo_recebido['recheios'];
			$borda = $conteudo_recebido['borda'];
			$nota = $conteudo_recebido['nota'];


			$query = 'INSERT INTO pizzazz (nome, recheios, borda, nota) 
							VALUES("'.$nome.'","'.$recheios.'","'.$borda.'","'.$nota.'")' ;

			$res = mysqli_query($link, $query) or die(mysqli_error($link)); //true ou false

			//echo $query;
			//die;

		break;

		case 'inserirRes':
			$nome = $conteudo_recebido['nome'];
			$endereco = $conteudo_recebido['endereco'];
			$telefone = $conteudo_recebido['telefone'];

			$query = 'INSERT INTO restaurantes (nome, endereco, telefone) 
							VALUES("'.$nome.'","'.$endereco.'","'.$telefone.'")' ;

			$res = mysqli_query($link, $query) or die(mysqli_error($link)); //true ou false

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
	header('Location: index.php?pag='.$acao.'&status=ok'); 
	exit; //encerra a execução do arquivo

	//die;
?>