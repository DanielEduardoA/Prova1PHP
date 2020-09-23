<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atendimento</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="validacao.js" type="text/javascript"></script>
</head>
<body background-color = "gray">
    <div  align=center>
    <form class="formulario" method="post" action="atendimentos.php" align=left> 
        <p class="centralizado"> Registro de atendimentos</p>
		
        
        <div class="field">
            <label for="nome">Cliente:</label>
            <input type="text" id="nome" name="nome" value="" placeholder="Digite o nome do cliente*" required>
        </div>

        <div class="field">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="" placeholder="Digite o telefone do cliente*" required>
        </div>

        <div class="field">
            <label for="atividades">Atividades:</label>
            <select name="atividades" required>
                <option value="">Selecione</option>
                <option value="Segunda Via de Conta">Segunda Via de Conta</option>
                <option value="Mudança de Endereço">Mudança de Endereço</option>
                <option value="Suspensão do Serviço">Suspensão do Serviço</option>
                <option value="Negociação de Débitos">Negociação de Débitos</option>
            </select>
        </div>

        <input type="submit" name="atendimentos" value="Registrar">
        
    <a class="btnVoltar" href="atendimentos.php">Voltar</a>
        
    </form>
</div>
</body>
</html>