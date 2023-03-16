<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	<hr>
	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="ex041.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Acesso ao portal.
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-6">
		  					<label> Usuario <span class="text-danger">*</span> </label><br>
							<input type="text" name="usuario" class="form-control" required><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Senha <span class="text-danger">*</span></label><br>
							<input type="password" name="senha" class="form-control" required><br>
		  				</div>

				    	<div class="col-md-12">
				    		<button type="somar" class="btn btn-success"> ACESSAR</button>
				    	</div>
		  			</div>	

				  </div>
				</div>
			</form>
	  	</div>	  	
	  </div>
	</div>

	<?php 
	
	if(isset($_GET['msg'])){

		if($_GET['msg'] == "usuario_nao_encontrado"){
			$titulo = "Usuario não cadastrado"; 
			$subtitulo = "Usuario está incorreto. Favor tentar novamente.";
			$tipo = "error"; 
		}elseif($_GET['msg'] == "senha_incorreta"){
			$titulo = "Senha Incorreta"; 
			$subtitulo = "Erro de senha. Favor tentar novamente.";
			$tipo = "error"; 
		}elseif($_GET['msg'] == "login_sucedido"){
			$titulo = "Seja Bem-vindo!!!"; 
			$subtitulo = "Usuario e senha corretos";
			$tipo = "sucesso";
		}	
    ?>

	<script type="text/javascript">
		$(document).ready(function() {
			Swal.fire(
			  "<?=$titulo;?>",
			  "<?=$subtitulo;?>",
			  "<?=$tipo;?>"
			)
		});
	</script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>