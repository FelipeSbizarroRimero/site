<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <h2>Cadastro de Clientes</h2>
        <p class="subtitulo">Preencha os campos abaixo para registrar o cliente no sistema.</p>

        <form action="processa_cadastro.php" method="POST">

            <fieldset>
                <legend>Dados Pessoais</legend>

                <div class="linha-grupo">
                    <div class="campo w-70">
                        <label for="nome">Nome Completo: *</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: João Silva" required minlength="3" autofocus>
                    </div>

                    <div class="campo w-30">
                        <label for="nascimento">Data de Nascimento: *</label>
                        <input type="date" id="nascimento" name="nascimento" required>
                    </div>
                </div>

                <div class="linha-grupo">
                    <div class="campo w-50">
                        <label for="cpf">CPF: *</label>
                        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required
                            pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato 000.000.000-00">
                    </div>

                    <div class="campo w-50">
                        <label>Gênero: *</label>
                        <div class="opcoes-inline">
                            <label><input type="radio" name="genero" value="Masculino" required> Masculino</label>
                            <label><input type="radio" name="genero" value="Feminino"> Feminino</label>
                            <label><input type="radio" name="genero" value="Outro"> Outro</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Contato & Plano</legend>

                <div class="linha-grupo">
                    <div class="campo w-50">
                        <label for="email">E-mail: *</label>
                        <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
                    </div>

                    <div class="campo w-50">
                        <label for="telefone">Telefone/WhatsApp: *</label>
                        <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                    </div>
                </div>

                <div class="linha-grupo">
                    <div class="campo w-60">
                        <label for="plano">Tipo de Plano: *</label>
                        <select id="plano" name="plano" required>
                            <option value="">-- Selecione um Plano --</option>
                            <option value="Gratuito">Gratuito (Testes)</option>
                            <option value="Bronze">Bronze (R$ 49,90/mês)</option>
                            <option value="Prata">Prata (R$ 99,90/mês)</option>
                            <option value="Ouro">Ouro (R$ 199,90/mês)</option>
                        </select>
                    </div>

                    <div class="campo w-40">
                        <label for="limite_credito">Limite de Crédito Inicial:</label>
                        <input type="number" id="limite_credito" name="limite_credito" min="0" max="50000" step="0.01" placeholder="0,00">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Configurações Adicionais</legend>

                <div class="campo">
                    <label>Interesses do Cliente:</label>
                    <div class="opcoes-check">
                        <label><input type="checkbox" name="interesses[]" value="Tecnologia"> Tecnologia</label>
                        <label><input type="checkbox" name="interesses[]" value="Marketing"> Marketing</label>
                        <label><input type="checkbox" name="interesses[]" value="Finanças"> Finanças</label>
                        <label><input type="checkbox" name="interesses[]" value="Suporte VIP"> Suporte VIP</label>
                    </div>
                </div>

                <div class="campo">
                    <label for="observacoes">Observações Internas:</label>
                    <textarea id="observacoes" name="observacoes" rows="4" placeholder="Informações complementares sobre o perfil do cliente..."></textarea>
                </div>

                <div class="campo termo-aceite">
                    <label>
                        <input type="checkbox" name="termos" value="Aceito" required>
                        Declaro que os dados fornecidos são verídicos e aceito as Políticas de Privacidade. *
                    </label>
                </div>
            </fieldset>

            <div class="acoes">
                <button type="reset" class="btn-limpar">Limpar Tudo</button>
                <button type="submit" class="btn-salvar">Salvar Cadastro</button>
            </div>

        </form>
    </div>
</body>

</html>
