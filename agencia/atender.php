<?php

	require_once('conexao.php');
	
    $id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atender</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="validacao.js" type="text/javascript"></script>
</head>
<body background-color = "gray">
    <div  align=center>
        <p class="centralizado"> Senha <?php echo $id; ?></p>
        <p class="centralizado">Dirija-se ao atendimento</p>
    </div>
    <?php
        $dataAtendimento = date("Y-m-d H:i:s");
        $status = "atendido";
        $sql = "update atendimentos set atendimento = '$dataAtendimento', status = '$status' where id = ".$id;
        $resultado = mysqli_query($conexao, $sql);
        
        echo "<script>window.location.href='atendimentos.php';</script>";
    ?>
</body>
</html>