<?php 

	require_once('conexao.php'); //como se todo o código do arquivo estivesse aqui, então todas as variaveis dele são utilizaveis, visiveis aqui

	$acao = $_REQUEST['acao'];

	$pagina;

	//print_r($_POST);
	//die;

	switch($acao){
	//* INSERIR NOVA PIZZA *//
		case 'inserir': 
			$nome = $_POST['nome'];
			$recheios = $_POST['recheios'];
			$borda = $_POST['borda'];
			$nota = $_POST['nota'];
			$restaurante= $_POST['restaurante'];


			$query = 'INSERT INTO pizzazz (nome, recheios, borda, nota, id_restaurante) 
							VALUES("'.$nome.'","'.$recheios.'","'.$borda.'","'.$nota.'","'.$restaurante.'")';

			$res = mysqli_query($link, $query) or die(mysqli_error($link)); //true ou false

			header('Location: index.php?pag=inserir&status=ok');
			exit;
			break;

	//* INSERIR NOVO RESTAURANTE *//
		case 'inserirRes':
			$nome = $_POST['nome'];
			$endereco = $_POST['endereco'];
			$telefone = $_POST['telefone'];

			$query = 'INSERT INTO restaurantes (nome, endereco, telefone) 
							VALUES("'.$nome.'","'.$endereco.'","'.$telefone.'")' ;

			$res = mysqli_query($link, $query) or die(mysqli_error($link)); //true ou false

			header('Location: index.php?pag=inserirRes&status=ok'); 
			exit;
			break;

	//* EDITAR UM REGISTRO DE PIZZA *//
		case 'editar': 
			$id_pizzazz = $_POST['id_pizzazz'];
			$nome = $_POST['nome'];
			$recheios = $_POST['recheios'];
			$borda = $_POST['borda'];
			$nota = $_POST['nota'];

			$query = 'UPDATE pizzazz
						SET nome ="' .$nome. '",
							recheios= "' .$recheios. '",
							borda= "' .$borda. '",
							nota= "'.$nota.'"
						WHERE id_pizzazz = '.$id_pizzazz;

			$res = mysqli_query($link, $query) or die(mysqli_error($link));

			header('Location: index.php?pag=listar'); 
			exit;

			break;

	//* EDITAR UM REGISTRO DE RESTAURANTE *//
		case 'editarRes': 
			$id_restaurante = $_POST['id_restaurante'];
			$nome = $_POST['nome'];
			$endereco = $_POST['endereco'];
			$telefone = $_POST['telefone'];

			$query = 'UPDATE restaurantes
						SET nome ="' .$nome. '",
							endereco= "' .$endereco. '",
							telefone= "' .$telefone. '"
						WHERE id_restaurante = '.$id_restaurante;

			$res = mysqli_query($link, $query) or die(mysqli_error($link));

			header('Location: index.php?pag=listar'); 
			exit;
			break;

	//* EXCLUIR UM REGISTRO DE PIZZA *//
		case 'excluir': 

			$id_pizzazz = $_GET['id_pizzazz'];

			$query = 'DELETE FROM pizzazz
						WHERE id_pizzazz = '.$id_pizzazz;
			
			$res = mysqli_query($link, $query) or die(mysqli_error($link));
			header('Location: index.php?pag=listar&status=ok'); 

			break;

	//* EXCLUIR UM REGISTRO DE RESTAURANTE *//
		case 'excluirRes': 
			$id_restaurante = $_GET['id_restaurante'];

			$query = 'DELETE FROM restaurantes
						WHERE id_restaurante = '.$id_restaurante;
			
			$res = mysqli_query($link, $query) or die(mysqli_error($link));
			header('Location: index.php?pag=listar&status=ok'); 
			break;	
		
	//*DEFAULT*//
		default:
			echo 'caiu no default';
		break;
	}

?>