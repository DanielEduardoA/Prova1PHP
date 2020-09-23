<?php

require_once('conexao.php');

if(isset($_POST['nome']) && $_POST['nome'] != ""){

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
		$atividade = $_POST['atividades'];
		
        $status = "espera";
		$dataRegistro = date("Y-m-d H:i:s");
		$sql = "insert into atendimentos (nome, telefone, atividade, status, registro) values ('$nome', '$telefone', '$atividade',  '$status', '$dataRegistro')";
		
		$resultado = mysqli_query($conexao, $sql);

		if ($resultado){
			$_GET['msg'] = 'Registro de atendimento realizado com sucesso';
			$_POST = null;
		}elseif(!$resultado){
			$_GET['msg'] = 'Falha ao inserir o atendimento';
		}
	
} 

	

if(isset($_GET['msg']) && $_GET['msg'] != ""){
	echo '<p class="centralizado">'.$_GET['msg'].'</p>';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerenciamento de atendimentos</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form action="atendimento.php" method="post">
		<h2 class="centralizado">Atendimentos do dia <?php echo date("d/m/Y") ?></h2>;
		<input type="submit" name="atendimento" value="Cadastrar">
	</form>

    <table border=1 width=80% align=center><tr>
        <td><label for="cliente">Cliente</label></td>
        <td><label for="telefone">Telefone</label></td>
        <td><label for="atividade">Atividade</label></td>        
        <td><label for="status">Status</label></td>
		<td>Opções</td>
    </tr>

    
    <?php
		$statusEspera = "espera";
		$statusAtendido = "atendido";
    	$sql = "select id, nome, telefone, atividade, status FROM atendimentos where status = '$statusEspera' or status = '$statusAtendido' and DATE_FORMAT(registro, '%Y-%m-%d') = CURDATE() order by id asc";
		$resultado = mysqli_query($conexao, $sql);

		while($dados = mysqli_fetch_array($resultado)){

			if($dados['status'] == "espera"){
				echo '<tr>
                  <td>'.$dados['nome'].'</td>
				  <td>'.$dados['telefone'].'</td>        
                  <td>'.$dados['atividade'].'</td>
				  <td>'.$dados['status'].'</td>
				  <td>
				  	<a href="atender.php?id='.$dados['id'].'">Atender</a>
					<a href="cancelarAtendimento.php?id='.$dados['id'].'">Cancelar</a>
				  </td>
                  </tr>';
			} else {
				echo '<tr>
                  <td>'.$dados['nome'].'</td>
				  <td>'.$dados['telefone'].'</td>        
                  <td>'.$dados['atividade'].'</td>
				  <td>'.$dados['status'].'</td>
                  </tr>';
			}

            
		}
		mysqli_close($conexao);

	?>

    </table>
</body>
</html>