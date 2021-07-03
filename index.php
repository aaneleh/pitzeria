<?php
	require_once('conexao.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Projeto</title>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Benne&display=swap');
			body {
				background-color: #0D0D0D;
				font-family: 'Benne', serif;
				margin:  0 0;
				padding: 0 0;
			}
			.banner {
				text-align: center;
				background-color: #A60311;
				height: 10%;
				border-top: 0px;
			}
			.menu, .contato {
				text-align: center;
				display: flex;
				justify-content: space-around;
			}
			td {
				color: white;
				padding: 2% 2%;
				border-top: 1px solid #D9A59A;
			}
			tr a {
				color: #D9A59A;
			}
			table {
				width:  100%;
			}

			input {
				margin: 20px 0px;
			}


		</style>
	</head>
	<body>
		<table align="center">

			<tr>
				<td class="banner"> 
					<h1><a border="0" href='https://emojitool.com/pt/slice-of-pizza'>🍕</a>Pizzazz<a href='https://emojitool.com/pt/slice-of-pizza'>🍕</a></h1> 

				</td>	
			</tr>

			<tr>
				<td class="menu"> 
					<!-- depois do ? são parámetros-->
					<a href="index.php?pag=inserir"> Inserir Pizza</a>
					<a href="index.php?pag=inserirRes"> Inserir Restaurante </a> 
					<a href="index.php?pag=home"> Home </a> 
					<a href="index.php?pag=listar"> Listar </a> 
 					<a href="index.php?pag=buscar"> Buscar </a>


				</td>				
			</tr>

			<tr>
				<td>
					<?php
						if(isset($_GET['pag']) and !empty($_GET['pag']) ){ 

							$pg = $_GET['pag'];

							require_once($pg.'.php');  

						} else {
							require_once('home.php');
						}
						//echo $pg;
					?>

				</td>			
			</tr>

			<tr>
				<td class="contato">
					<p> Cidade, Rua, 142113 </p>
					<p> (51) 98888-7766 </p>   
				</td>				
			</tr>

		</table>
	</body>
</html>