<?php

	require_once('conexao.php');
	
	$id = $_GET['id'];
	
	if($id != ""){
		$status = "cancelado";
		$sql = "update atendimentos set status = '$status' where id = ".$id;
		$resultado = mysqli_query($conexao, $sql);
		if($resultado){
			$msg = "Atendimento cancelado com sucesso";
		}
		echo "<script>window.location.href='atendimentos.php?msg=$msg';</script>";
		
	}
	
?>