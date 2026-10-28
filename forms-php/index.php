<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Corpy</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
 	<header class="cabecalho">
 		<div class="cabecalho-container">
 			<img src="image/logo.png" alt="Logotipo da empresa">
 			<nav class="menu">
 				<ul>
 					<li><a href="index.php">Home</a></li>
 					<li><a href="index.php">Produtos</a></li>
 					<li><a href="index.php?pagina=cadastro">Clientes</a></li>
 					<li><a href="index.php">Sobre-nós</a></li>
 					<li><a href="index.php">Minha conta</a></li>
 					<li><a href="index.php">Carrinho</a></li>
 				</ul>
 			</nav>
 		</div>
 	</header>

 	<main class="conteudo">
 		<?php
 		$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

 		switch ($pagina) {
 			case 'cadastro':
 			    incluse 'cadastro_clientes.php'
 				break;
 			case 'sucesso':
 			    incluse 'processa_cadastro.php'
 				break;
 			case 'home'
 			default:
 				echo "<h1>Conteúdo Home</h1>";
 				echo "<p>Bem-vindo ao Sistema Corpy!</p>";
 				break;
 		}
 		?>
 	</main>

 	<footer class="rodape">
 		<h3>Sistema Corpy</h3>
 		<p>&copy; Todos os direitos reservados</p>
 		<span>Técnico em desenvolvimento de sistemas</span>
 	</footer>
</body>

</html>
