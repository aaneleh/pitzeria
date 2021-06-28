<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pitzeria</title>
		<style>
			body {
				background-color: #0D0D0D;
			}
			.banner {
				text-align: center;
				background-color: #A60311;
			}
			.menu {
				display: flex;
				justify-content: space-evenly;
			}
			td {
				color:  white;
				padding:  2% 2%;
			}
			tr a {
				color: #D9A59A;
			}
			table {
				border:  1px solid #D9A59A;
				width:  98%;
			}

			input {
				margin: 20px 0px;
			}

		</style>
	</head>
	<body>
		<table align= "center"; border="1">

			<tr>
				<td class="banner"> 
					<br> Banner <br><br> 
				</td>	
			</tr>

			<tr>
				<td class="menu">  
					<!-- depois do ? são parámetros-->
					<a href="index.php?pag=home"> Home </a> 
					<a href="index.php?pag=listar"> Listar </a> 
					<a href="index.php?pag=inserir"> Inserir </a> 
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

					?>

				</td>			
			</tr>

			<tr>
				<td><br>Contato<br><br></td>				
			</tr>

		</table>
	</body>
</html>