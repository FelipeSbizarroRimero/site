<?php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] != "POST") {
	die("Acesso negado. Por favor, envie o formulário corretamente.");
}

//Processamento e Sanitização
$nome           = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento     = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf            = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$genero         = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$email          = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone       = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$plano          = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_SPECIAL_CHARS);
$limite_credito = isset($_POST['limite_credito']) ? floatval($_POST['limite_credito']) : 0.0;
$observacoes    = filter_input(INPUT_POST, 'observacoes', FILTER_SANITIZE_SPECIAL_CHARS);
$interesses     = isset($_POST['interesses']) ? $_POST['interesses'] : []; 

//Validações de erro
if (!$nome || !$nascimento || !$cpf || !$email || !$plano) {
	die("Erro: Por favor, preencha todos os campos obrigatórios corretamente.");
}

if ($email === false) {
	die("Erro: o formato do e-mail inserido é inválido.");
}
?>

<!-- Card que carrega dentro do index -->
<div class="resposta-sucesso">
	<h3>Registro Processado com Sucesso!!!</h3>
	<p>Os dados abaixo foram validados pelo servidor e estão prontois para armazenamento:</p>
	<hr>

	<ul>
		<li><strong>Nome:</strong> <?php echo $nome; ?></li>
		<li><strong>Nascimento:</strong> <?php echo date("d/m/Y", strtotime($nascimento)); ?></li>
		<li><strong>Cpf:</strong> <?php echo $cpf; ?></li>
		<li><strong>Gênero:</strong> <?php echo $genero; ?></li>
		<li><strong>E-mail:</strong> <?php echo $email; ?></li>
		<li><strong>Telefone:</strong> <?php echo $telefone; ?></li>
		<li><strong>Plano Selecionado:</strong> <?php echo $plano; ?></li>
		<li><strong>Limite Autorizada:</strong>R$ <?php echo number_format($limite_credito, 2, ',', '.'); ?></li>
         
<li><strong>Áreas de Interesse</strong>
	<?php echo !empty($interesses) ? implode(", ", $interesses) : "Nenhuma selecionada."; ?>
</li>

<li><strong>Observações Internas:</strong> 

</li>




	</ul>



</div>
