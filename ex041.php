<?php 

	# Recebendo os dados do formulário
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario != "anthony@email.com"){		
		header("location: index.php?msg=usuario_nao_encontrado");
	}elseif($senha != '1234'){
		header("location: index.php?msg=senha_incorreta");
	}else{
		header("location: index.php?msg=login_sucedido");
	}

?>